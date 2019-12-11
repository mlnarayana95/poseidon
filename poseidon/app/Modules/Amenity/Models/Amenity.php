<?php

namespace App\Modules\Amenity\Models;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model {

    // Disable TimeStamps
    public $timestamps = false;

    protected $fillable = [
        'amenity',
        'amenity_icon'
    ];

    /**
     * Get all of the hotels for the amenity.
     */
    public function hotels()
    {
        return $this->belongsToMany('App\Modules\Hotel\Models\Hotel');
    }

    /**
     * Get Amenity With Count
     * @return mixed
     */
    public static function amenitiesWithCount()
    {
        $hotels = self::has('hotels')
            ->withCount('hotels')
            ->orderBy('amenity')
            ->get();
        return $hotels;
    }

}
