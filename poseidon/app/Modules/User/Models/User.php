<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Modules\Customer\Models\Customer;


class User extends Model {

	use SoftDeletes;

    protected $fillable = ['email', 'password', 'user_type'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function person()
    {
       return $this->hasOne('App\Modules\Person\Models\Person');
    }
}
