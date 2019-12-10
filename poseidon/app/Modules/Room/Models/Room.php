<?php

namespace App\Modules\Room\Models;

use App\Modules\Base\Models\MyModel;
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
     * Get all of the features for the room
     */
    public function images()
    {
        return $this->belongsToMany('App\Modules\Room\Models\Image');
    }

    /**
     * Get the images for the room
     */
    public function featuredImage()
    {
        return $this->belongsToMany('App\Modules\Base\Models\Image')->where('is_featured',1);
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
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function getList()
    {
        $rooms = self::with('features')
            ->join('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->join('room_types', 'rooms.room_type_id', '=', 'room_types.id')
            ->select('rooms.*',
                DB::raw('CONCAT_WS(" ", room_types.type, hotels.name, rooms.room_number) AS full_name'),
                'room_types.type', 'hotels.name as hotel', 'hotels.address')
            ->paginate(20);
        return $rooms;
    }

    public static function calculateRoomCost(int $room_id, $checkin, $checkout)
    {
        $room = Room::findOrFail($room_id);

        $date1 = Carbon::createFromFormat('Y-m-d', $checkin);
        $date2 = Carbon::createFromFormat('Y-m-d', $checkout);

        $data['room_cost'] = $room->room_cost;
        $data['no_nights'] = $date1->diffInDays($date2);
        $data['total_fees'] = $room->room_cost * $data['no_nights'];
        $data['total_tax'] = $data['total_fees'] * (setting('gst_tax') + setting('pst_tax'))/100;
        $data['total_cost'] = $data['total_fees'] + $data['total_tax'];

        return $data;
    }
}