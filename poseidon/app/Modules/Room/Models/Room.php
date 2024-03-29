<?php

namespace App\Modules\Room\Models;

use App\Modules\Base\Models\MyModel;
use App\Modules\Booking\Models\Booking;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Room extends MyModel
{

    use SoftDeletes;

    protected $fillable = [
        'hotel_id',
        'room_number',
        'room_cost',
        'description',
        'max_adults',
        'max_children',
        'room_type_id',
        'no_bathrooms',
        'smoking',
        'featured'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get all of the features for the room
     */
    public function features()
    {
        return $this->belongsToMany('App\Modules\Feature\Models\Feature');
    }

    /**
     * Get all of the bookings for the room
     */
    public function bookings()
    {
        return $this->hasMany('App\Modules\Booking\Models\Booking');
    }

    /**
     * Get all of the features for the room
     */
    public function images()
    {
        return $this->belongsToMany('App\Modules\Base\Models\Image');
    }

    /**
     * Get the room type
     */
    public function type()
    {
        return $this->belongsTo('App\Modules\Room\Models\RoomType',
            'room_type_id');
    }

    /**
     * Get the room type
     */
    public function hotel()
    {
        return $this->belongsTo('App\Modules\Hotel\Models\Hotel');
    }

    /**
     * Get the List of Rooms for Frontend
     * @param $search array
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function getList($search = array())
    {
        $rooms = self::with('features', 'images')
            ->join('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->join('room_types', 'rooms.room_type_id', '=', 'room_types.id');

        if(isset($search['features']) && $search['features'] != null) {
            $features = $search['features'];
            $rooms = $rooms->whereHas('features', function($q) use($features){
                $q->whereIn('id', $features);
            });
        }

        if(isset($search['types']) && $search['types'] != null) {
            $types = $search['types'];
            $rooms = $rooms->whereHas('type', function($q) use($types){
                $q->whereIn('id', $types);
            });
        }

        if(isset($search['hotels']) && $search['hotels'] != null) {
            $hotels = $search['hotels'];
            $rooms = $rooms->whereHas('hotel', function($q) use($hotels){
                $q->whereIn('id', $hotels);
            });
        }

        if(isset($search['locations']) && $search['locations'] != null) {
            $locations = $search['locations'];
            $rooms = $rooms->whereHas('hotel.location', function($q) use($locations){
                $q->whereIn('id', $locations);
            });
        }

        if(isset($search['price_range']) && $search['price_range'] != null) {
            $price_range = explode(';', $search['price_range']);
            $rooms = $rooms->where('room_cost', '>=', $price_range[0]);
            $rooms = $rooms->where('room_cost', '<=', $price_range[1]);
        }

        if(isset($search['checkin']) && isset($search['checkout']))
            $rooms = $rooms->isNotReserved($search['checkin'], $search['checkout']);

        if(isset($search['adults']) && $search['adults'] != '')
            $rooms = $rooms->where('max_adults', '>=', $search['adults']);

        if(isset($search['children']) && $search['children'] != '')
            $rooms = $rooms->where('max_children', '>=', $search['children']);

        $rooms = $rooms->select('rooms.*',
                DB::raw('CONCAT_WS(" ", room_types.type, hotels.name, rooms.room_number) AS full_name'),
                'room_types.type', 'hotels.name as hotel', 'hotels.address')
            ->orderBy('id', 'desc')
            ->paginate(20);
            //->get();
        //dd($rooms->toArray());
        return $rooms;
    }

    /**
     * Available rooms
     * @param $query
     * @param $checkIn
     * @param $checkOut
     * @return mixed
     */
    public function scopeIsNotReserved($query, $checkIn, $checkOut)
    {
        $book_start = Carbon::parse($checkIn.' 00:00:00');
        $book_end = Carbon::parse($checkOut.' 11:59:59');

        $reservedRooms = Booking::whereBetween('checkin_date', [$book_start, $book_end])
            ->orWhereBetween('checkout_date', [$book_start, $book_end])
            ->pluck('room_id')
            ->all();

        return $query->whereNotIn('rooms.id', $reservedRooms);
    }

    /**
     * Get the List of Filtered Rooms for Frontend
     * @param $request array
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function getFilteredList(Array $request)
    {
        $rooms = self::with('features')
            ->join('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->join('room_types', 'rooms.room_type_id', '=', 'room_types.id');

        if(isset($request['checkin']) && isset($request['checkout']))
            $rooms = $rooms->isNotReserved($request['checkin'], $request['checkout']);

        if(isset($request['hotel_id']))
            $rooms = $rooms->where('hotel_id', $request['hotel_id']);

        $rooms = $rooms->select('rooms.*',
                DB::raw('CONCAT_WS(" ", room_types.type, hotels.name, rooms.room_number) AS full_name'),
                'room_types.type', 'hotels.name as hotel', 'hotels.address')
            ->paginate(20);
            //->get();

        return $rooms;
    }

    /**
     * @param int $room_id
     * @param     $checkin
     * @param     $checkout
     * @return mixed
     */
    public static function calculateRoomCost($room_id, $checkin, $checkout)
    {
        $room = Room::findOrFail($room_id);

        $date1 = Carbon::parse($checkin);
        $date2 = Carbon::parse($checkout);
        //$date2 = Carbon::createFromFormat('Y-m-d', $checkout);

        $data['room_cost'] = $room->room_cost;
        $data['no_nights'] = $date1->diffInDays($date2);
        $data['total_fees'] = $room->room_cost * $data['no_nights'];
        $data['total_gst'] = $data['total_fees'] * setting('gst_tax')/100;
        $data['total_pst'] = $data['total_fees'] * setting('pst_tax')/100;
        $data['total_tax'] = $data['total_gst'] + $data['total_pst'];
        $data['total_cost'] = $data['total_fees'] + $data['total_tax'];

        return $data;
    }

    /**
     * @param $room_id
     * @param $checkin
     * @param $checkout
     * @return bool
     */
    public static function isBookingAvailable($room_id, $checkin, $checkout) {
        $bookings = Booking::where('room_id', $room_id)->get();
        $from = Carbon::parse($checkin);
        $to = Carbon::parse($checkout);

        foreach ($bookings as $booking) {
            $book_start = Carbon::parse($booking->checkin_date);
            $book_end = Carbon::parse($booking->checkout_date);
            if ($from->between($book_start, $book_end) || $to->between($book_start, $book_end) || ($book_start->between($from, $to) && $book_end->between($from, $to))) {
                return false;
            }
        }
        return true;
    }
}