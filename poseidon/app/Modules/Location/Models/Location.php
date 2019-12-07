<?php

namespace App\Modules\Location\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

    /**
     * Get all of the hotels for the locations.
     */
    public function hotels()
    {
        return $this->belongsToMany('App\Modules\Hotel\Models\Hotel');
    }

    /**
     * Get all of the rooms for the locations (nested relationship).
     */
    public function rooms()
    {
        return $this->hasManyThrough('App\Modules\Room\Models\Room', 'App\Modules\Hotel\Models\Hotel');
    }

    /**
     * Get Hotels With Count
     * @return mixed
     */
    public static function locationsWithCount()
    {
        $hotels = self::has('rooms')
            ->withCount('rooms')
            ->orderBy('location')
            ->get();
        return $hotels;
    }

}
