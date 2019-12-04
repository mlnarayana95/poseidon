<?php

namespace App\Modules\Room\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model {

    use SoftDeletes;

    protected $fillable = ['hotel_id', 'room_number', 'room_cost', 'description', 'max_adults', 'max_children', 'room_type_id', 'no_bathrooms', 'smoking', 'featured'];

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
     * Get the room type
     */
    public function type()
    {
        return $this->belongsTo('App\Modules\Room\Models\RoomType', 'room_type_id');
    }

    /**
     * Get the room type
     */
    public function hotel()
    {
        return $this->belongsTo('App\Modules\Hotel\Models\Hotel');
    }

}