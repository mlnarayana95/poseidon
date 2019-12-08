<?php

namespace App\Modules\Frontend\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    protected $rules = [
        'name' => 'bail|required|max:255',
        'email'=> 'required',
        'subject'=> 'required',
        'message'=> 'required'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view("Frontend::contact");
    }

    public function sendMail(Request $request)
    {
        // Evgheni... Your code goes here   
        $request->validate($this->rules);
        return view("Frontend::contact");
    }
}
