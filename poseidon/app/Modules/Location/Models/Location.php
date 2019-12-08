<?php

namespace App\Modules\Location\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model {

    use Sluggable;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
	protected $table = 'locations';

	protected $fillable = ['location', 'description', 
	'slug', 'image_id', 'is_featured'];

	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'location'
            ]
        ];
    }


}
