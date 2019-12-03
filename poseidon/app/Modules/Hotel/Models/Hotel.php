<?php

namespace App\Modules\Hotel\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model {

    protected $fillable = ['name', 'description', 'location_id', 'address', 'postal_code', 'phone_number', 'checkin_time', 'checkout_time', 'airport_distance', 'airport_transportation', 'pet_friendly'];

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

}
