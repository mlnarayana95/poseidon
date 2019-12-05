<?php

namespace App\Modules\Hotel\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model {

    use Sluggable;
    use SoftDeletes;

    protected $fillable = ['name', 'description', 'location_id', 'address', 'postal_code', 'phone_number', 'checkin_time', 'checkout_time', 'airport_distance', 'airport_transportation', 'pet_friendly'];

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

}
