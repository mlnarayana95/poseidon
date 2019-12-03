<?php

namespace App\Modules\Hotel\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model {

    /**
     * Get all of the amenities for the country.
     */
    public function amenities()
    {
        return $this->hasMany('App\Modules\Amenity\Models\HotelAmenity', 'hotel_id');
    }

}
