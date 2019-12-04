<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request,['email'=>'required|email','password'=>'required']);
        if(auth()->attempt(array('email'=>$input['email'],'password'=>$input['password'])))
        {
            if(auth()->user()->user_type==1)
            {
                session(['user_id' => auth()->user()->id]);
                /*how to get the info from the session variable*/
                //$info = $request->session()->get('user_id');
                /*Set the session one the user is loggedin*/
                //config(['session.lifetime' => 1440]);
                return redirect()->route('profile');
            }
            else{
                return $this->redirect()->route('/profile');
            }
        }
        else{

            return redirect()->route('login')->with('error','Email-Address And Password are Wrong');
        }

    }
}
