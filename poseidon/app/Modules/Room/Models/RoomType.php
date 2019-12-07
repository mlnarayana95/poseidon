<?php

namespace App\Modules\Room\Models;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model {

    // Disable TimeStamps
    public $timestamps = false;

    public function rooms()
    {
        return $this->hasMany('App\Modules\Room\Models\Room');
    }

    /**
     * Get Types With Count
     * @return mixed
     */
    public static function typesWithCount()
    {
        $types = self::has('rooms')
            ->withCount('rooms')
            ->orderBy('type')
            ->get();
        return $types;
    }
}
