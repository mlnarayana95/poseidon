<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Modules\Person\Models\Person;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
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

    protected $rules =[
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'first_name' => ['required','max:255','alpha'],
        'last_name' => ['required','max:255','alpha'],
        'birth_date' => ['required','max:255','alpha'],
        'gender' => ['required','max:1','alpha'],
        'address' => ['required','max:500','alpha_num'],
        'postal_code' => ['required','max:500','regex:/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/'],
        'phone_number' => ['required','max:500','regex:/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/']
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
        try
        {
            $request->validate($this->rules);

                $user = User::create([
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'user_type' => 1
                ]);
                $user_id = $user->id;
                Person::create([
                    'user_id' => $user_id,
                    'first_name' =>$data['first_name'],
                    'last_name' =>$data['last_name'],
                    'birth_date' =>$data['birth_date'],
                    'gender' =>$data['gender'],
                    'address' =>$data['address'],
                    'postal_code' =>$data['postal_code'],
                    'phone_number' =>$data['phone_number']
                ]);
                DB::Commit();

        } catch (Exception $e) {
            DB::rollback();
        }

    }
}
