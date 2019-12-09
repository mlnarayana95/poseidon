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
        $validated_data['name'] = $request->name;
        $validated_data['email'] = $request->email;
        $validated_data['subject'] = $request->subject;
        $validated_data['message'] = $request->message;
         $data = array('name'=> $validated_data['name'], 'email'=>$validated_data['email'],
            'subject'=>$validated_data['subject']);
            Mail::send('login' ,$data,function($message) use ($data){
                $message->to($data['email'],$data['name'])->subject($subject);

            });
        return view("Frontend::contact");


    }
}
