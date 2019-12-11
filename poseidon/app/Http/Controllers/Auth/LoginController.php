<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;
use Redirect;

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
    protected $redirectTo = '/profile';

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
        dd('Entered here');
        $input = $request->all();
        $this->validate($request,['email'=>'required|email','password'=>'required']);

        if(auth()->attempt(array('email'=>$input['email'],'password'=>$input['password'])))
        {
            if(request('ref') == 'booking' && session('booking_url') != null)
                return redirect()->to(session('booking_url'));

            // Customer
            if(auth()->user()->user_type == 0)
            {
                session(['user_id' => auth()->user()->id]);
                // http://poseidon.local/booking?room_id=1&adults=&children=&dates=2019-12-18+to+2019-12-20

                return redirect()->intended('/profile');
            }
            // Admin
            else{
                return redirect()->to('/admin/dashboard');
            }
        }
        else{

            return redirect()->to('/login')->with('message','Email and password invalid! Or the Email address has not been verified.');
        }

    }
}
