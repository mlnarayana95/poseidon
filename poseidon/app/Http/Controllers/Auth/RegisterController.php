<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Modules\Person\Models\Person;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use Mail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /*protected $rules = [
        'email' => ['required', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'],
        'cnf_password' => ['required', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', 'same:password'],
        'first_name' => ['required', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
        'last_name' => ['required', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
        'birthdate' => ['required', 'max:255', 'date_format:Y-m-d'],
        'gender' => ['required'],
        'address' => ['required', 'max:500', 'regex:/^\d+\s[A-z]+\s[A-z]+/'],
        'postal_code' => ['required', 'max:500', 'regex:/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/'],
        'phone_number' => ['required', 'max:500', 'regex:/^(\(\d{3}\)[.-]?|\d{3}[.-]?)?\d{3}[.-]?\d{4}$/']
    ];*/

    protected $rules = [
        'email' => ['required', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'min:8'],
        'cnf_password' => ['required', 'min:8', 'same:password'],
        'first_name' => ['required', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
        'last_name' => ['required', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
        'birthdate' => ['required', 'max:255', 'date_format:Y-m-d'],
        'gender' => ['required'],
        'address' => ['required', 'max:500', 'regex:/^\d+\s[A-z]+\s[A-z]+/'],
        'postal_code' => ['required', 'max:500'],
        'phone_number' => ['required', 'max:500']
    ];


    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function register(Request $request)
    {
        DB::BeginTransaction();
        try {
            $request->validate($this->rules);

            $user = User::create([
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'user_type' => 1
            ]);
            $user_id = $user->id;
            Person::create([
                'user_id' => $user_id,
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'birthdate' => $request['birthdate'],
                'gender' => $request['gender'],
                'address' => $request['address'],
                'postal_code' => $request['postal_code'],
                'phone_number' => $request['phone_number']
            ]);
            DB::Commit();
            $user->sendEmailVerificationNotification();
        } catch (Exception $e) {
            DB::rollback();
        }

        return redirect('/login')->with('message','A verification link has been sent to your email address.
        Please verify your account before you access into your account');;
    }
}
