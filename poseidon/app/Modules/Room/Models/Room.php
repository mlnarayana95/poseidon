<?php

namespace App\Modules\Room\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {

    protected $fillable = [];

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
        return $this->belongsTo('App\Modules\Room\Models\RoomType');
    }

}