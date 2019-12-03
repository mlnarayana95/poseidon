<?php


namespace App\Modules\Person\Models;

use Illuminate\Database\Eloquent\Model;

class Person Extends Model
{
    protected $fillable =['user_id','first_name','last_name','birth_date','gender','address','postal_code','phone_number'];
}