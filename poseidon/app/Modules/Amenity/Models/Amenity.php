<?php

namespace App\Modules\Amenity\Models;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model {

    // Disable TimeStamps
    public $timestamps = false;

    /**
     * Get all of the hotels for the amenity.
     */
    public function hotels()
    {
        return $this->belongsToMany('App\Modules\Hotel\Models\Hotel');
    }

}
