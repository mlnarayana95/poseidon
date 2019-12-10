<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Modules\Customer\Models\Customer;


class User extends Model {

	use SoftDeletes;

    protected $fillable = ['email', 'password', 'user_type'];
    protected $table = 'user';
    protected $primaryKey = 'user_id';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function customer()
    {
        $this->belongsTo('App\Modules\Customer\Models\Customer');
    }
}
