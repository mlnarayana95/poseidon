<?php

namespace App\Modules\User\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\User\Models\User;
use App\Modules\Customer\Models\Customer;
use Carbon\Carbon;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = Customer::with('user')->whereHas('user', function ($query) {
                $query->where('user_type', 1);
            })->get();
        
        return view("User::index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User::add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate Form Inputs
        $validated_data = $this->validateUser($request, true);

        User::create($validated_data);

        flash('User has been created successfully!')->success();

        return redirect()->route('admin.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = Customer::with('user')->whereHas('user', function ($query ) use ($id){
                $query->where('id', $id);
            })->first();
        $user = $data['user'];
        
        $data['birthdate'] = Carbon::parse($user->birthdate)->format('m/d/Y');
        return view("User::edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate Form Inputs
        $validated_data = $this->validateUser($request, false);

        Customer::find($id)->update($validated_data);

        flash('User has been updated successfully!')->success();

        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        flash('User has been deleted successfully!')->success();
        return redirect()->route('admin.user.index');
    }

    /**
     * Validate User Form
     * @param $request
     * @return mixed
     */
    public function validateUser($request, $add=true)
    {        
        $rules = [
        'first_name' => ['required', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
        'last_name' => ['required', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
        'birthdate' => ['required', 'max:255'],
        'address' => ['required', 'max:500'],
        'postal_code' => ['required', 'max:500'],
        'phone_number' => ['required', 'max:500']
        ];

        if($add)
        {
            $rules =
            ['email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255|same:confirm_password',
            'confirm_password' => 'required|min:8|max:255'];
        }
        
        $validated_data = $request->validate($rules);
        $validated_data['birthdate'] = Carbon::parse($request->birthdate)->format('Y-m-d');
        return $validated_data;
    }
}
