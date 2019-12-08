<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $fillable = ['email', 'password', 'user_type'];
    protected $table = 'user';
    protected $primaryKey = 'user_id';


}
