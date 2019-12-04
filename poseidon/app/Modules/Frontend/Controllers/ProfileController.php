<?php


namespace App\Modules\Frontend\Controllers;

use DB;
use Session;
class ProfileController
{
    protected $rules =[
        'email' => ['required', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'],
        'cnf_password' => ['required', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/','same:password'],
        'first_name' => ['required','max:255','regex:/^[\pL\s\-]+$/u'],
        'last_name' => ['required','max:255','regex:/^[\pL\s\-]+$/u'],
        'birthdate' => ['required','max:255','date_format:Y-m-d'],
        'gender' => ['required'],
        'address' => ['required','max:500','regex:/^\d+\s[A-z]+\s[A-z]+/'],
        'postal_code' => ['required','max:500','regex:/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/'],
        'phone_number' => ['required','max:500','regex:/^(\(\d{3}\)[.-]?|\d{3}[.-]?)?\d{3}[.-]?\d{4}$/']
    ];

    public function show()
    {
        $person = DB::table('persons')->where('user_id',Session::get('user_id'))->first();
        return view("Frontend::profile", compact('person'));
    }
    public function load()
    {
        $person = DB::table('persons')->where('user_id',Session::get('user_id'))->first();
        return view("Frontend::update_profile", compact('person'));
    }
    public function update(Request $request){
        $request->validate($this->rules);

    }
}