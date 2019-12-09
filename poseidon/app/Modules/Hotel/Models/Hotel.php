<?php

namespace App\Modules\Hotel\Models;

use App\Modules\Room\Models\Room;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{

    use Sluggable;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'location_id',
        'address',
        'postal_code',
        'phone_number',
        'checkin_time',
        'checkout_time',
        'airport_distance',
        'airport_transportation',
        'pet_friendly'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * Get all of the amenities for the hotel.
     */
    public function amenities()
    {
        return $this->belongsToMany('App\Modules\Amenity\Models\Amenity');
    }

    /**
     * Get the location for the hotel
     */
    public function location()
    {
        return $this->belongsTo('App\Modules\Location\Models\Location');
    }

    /**
     * Get the rooms for the hotel
     */
    public function rooms()
    {
        return $this->hasMany('App\Modules\Room\Models\Room');
    }

    /**
     * Get the images for the hotel
     */
    public function images()
    {
        return $this->belongsToMany('App\Modules\Base\Models\Image');
    }

    /**
     * Get the images for the hotel
     */
    public function featuredImage()
    {
        return $this->belongsToMany('App\Modules\Base\Models\Image')->where('is_featured',1);
    }

    /**
     * Get Hotels With Count
     * @return mixed
     */
    public static function hotelsWithCount()
    {
        $hotels = self::has('rooms')
            ->withCount('rooms')
            ->orderBy('name')
            ->get();
        return $hotels;
    }

    /**
     * Get the List of Hotels for Frontend
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function getList()
    {
        $hotels = self::with('featuredImage', 'amenities', 'location')
            ->has('rooms')
            ->paginate(20);

        foreach ($hotels as $hotel) {
            $hotel->min_price = self::getLowestRoomPrice($hotel->id);
        }
        //dd($hotels->toArray());
        return $hotels;
    }

    /**
     * Get Lowest Room Price for Hotel
     * @param $hotel_id
     * @return mixed
     */
    public static function getLowestRoomPrice($hotel_id)
    {
        $room = Room::where('hotel_id', $hotel_id)
            ->selectRaw('min(room_cost) as min_price')
            ->first();
        return $room->min_price;
    }
}
