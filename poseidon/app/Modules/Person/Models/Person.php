<?php


namespace App\Modules\Person\Models;

use Illuminate\Database\Eloquent\Model;

class Person Extends Model
{
    protected $fillable =['id','first_name','last_name','birthdate','gender','address','postal_code','phone_number'];
}