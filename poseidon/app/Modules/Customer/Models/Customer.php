<?php

namespace App\Modules\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\User\Models\User;
use App\Modules\Person\Models\Person;

class Customer extends Model{

	protected $table = 'persons'; 

 	public function user()
    {
        return $this->hasOne('App\Modules\User\Models\User', 'user_id');
    }

}
