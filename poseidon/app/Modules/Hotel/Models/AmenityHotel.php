<?php

namespace App\Modules\Hotel\Models;

use Illuminate\Database\Eloquent\Model;

class AmenityHotel extends Model {

    // Disable TimeStamps
    public $timestamps = false;
    public $table = 'amenity_hotel';

    public $fillable = ['amenity_id', 'hotel_id'];

}
