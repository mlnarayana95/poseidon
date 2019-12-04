<?php


namespace App\Modules\Frontend\Controllers;

use DB;
use Session;
class ProfileController
{
    public function show()
    {
        $person = DB::table('persons')->where('user_id',Session::get('user_id'))->first();
        return view("Frontend::profile", compact('person'));
    }
}