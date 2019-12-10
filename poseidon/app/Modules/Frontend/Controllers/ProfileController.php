<?php


namespace App\Modules\Frontend\Controllers;
use App\Modules\Booking\Models\Booking;
use App\Modules\Person\Models\Person;
use Illuminate\Http\Request;
use DB;
use Session;
class ProfileController
{
    protected $rules =[
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
        $bookings = Booking::with('room')->where('user_id', 1)->get();
        dd($bookings->toArray());

        $person = DB::table('persons')->where('user_id',Session::get('user_id'))->first();
        return view("Frontend::profile", compact('person'));
    }
    public function load()
    {
        $person = DB::table('persons')->where('user_id',Session::get('user_id'))->first();
        return view("Frontend::update_profile", compact('person'));
    }
    public function update(Request $request){

        $valid_data =  $this->validateProfile($request);
        $person = DB::table('persons')->where('user_id',Session::get('user_id'))->first();
        Person::find($person->id)->update($valid_data);
        return redirect()->route('profile');
    }

    public function validateProfile($request)
    {
        $validated_data = $request->validate($this->rules);
        $validated_data['first_name'] = $request->first_name;
        $validated_data['last_name'] = $request->last_name;
        $validated_data['birthdate'] = $request->birthdate;
        $validated_data['gender'] = $request->gender;
        $validated_data['address'] = $request->address;
        $validated_data['postal_code'] = $request->postal_code;
        $validated_data['phone_number'] = $request->phone_number;

        return $validated_data;
    }
}