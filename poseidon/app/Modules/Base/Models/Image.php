<?php

namespace App\Modules\Base\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

	protected $table = 'images';

	public $fillable = [
        'file_name'
    ];

    public $timestamps = false;

}