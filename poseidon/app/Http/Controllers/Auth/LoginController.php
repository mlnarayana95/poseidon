<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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

    public function login(Request $request){

        $input = $request->all();
        $this->validate($request,['email'=>'required|email','password'=>'required']);
        if(auth()->attempt(array('email'=>$input['email'],'password'=>$input['password'])))
        {
            if(auth()->user()->user_type==1)
            {
                $request->session()->put('user_info',$request->input());
                /*how to get the info from the session variable*/
                $info = $request->session()->get('user_info');
                /*Set the session one the user is loggedin*/
                config(['session.lifetime' => 1440]);
                return redirect()->route('/index');

            }
            else{
                return $this->redirect()->route('/index');
            }
        }
        else{

            return redirect()->route('login')->with('error','Email-Address And Password are Wrong');
        }

    }
}
