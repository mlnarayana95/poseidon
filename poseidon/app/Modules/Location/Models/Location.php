<?php

namespace App\Modules\Location\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

	protected $table = 'locations';

	protected $fillable = ['location', 'description', 'slug', 'image_id', 'is_featured'];

}
