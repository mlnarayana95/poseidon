<?php

namespace App\Modules\Feature\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model {

    // Disable TimeStamps
    public $timestamps = false;

    /**
     * Get all of the rooms for the service.
     */
    public function rooms()
    {
        return $this->belongsToMany('App\Modules\Room\Models\Room');
    }

}
