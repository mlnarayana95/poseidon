<?php

namespace App\Modules\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\User\Models\User;
use App\Modules\Person\Models\Person;

class Customer extends Model{

	protected $table = 'persons'; 
	protected $fillable = ['user_id', 'first_name', 'last_name','birthdate','gender','address','postal_code','phone_number'];

    protected $dates = ['birthdate'];

 	public function user()
    {
        return $this->hasOne('App\Modules\User\Models\User', 'user_id');
    }

}
