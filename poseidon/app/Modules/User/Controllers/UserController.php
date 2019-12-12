<?php

namespace App\Modules\User\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\User\Models\User;
use App\Modules\Customer\Models\Customer;

class UserController extends Controller
{

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:8|max:255|same:confirm_password',
        'confirm_password' => 'required|min:8|max:255'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = Customer::with('user')->whereHas('user', function ($query) {
                $query->where('user_type', '!=', null);
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
        $validated_data = $this->validateUser($request);

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
        $data['user'] = User::find($id);
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
        $validated_data = $this->validateUser($request);

        User::find($id)->update($validated_data);

        flash('Hotel has been updated successfully!')->success();

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
    public function validateUser($request)
    {
        $validated_data = $request->validate($this->rules);
        $validated_data['email'] = $request->email;
        $validated_data['passwd'] = $request->password;
        $validated_data['user_type'] = $request->user_type;
        return $validated_data;
    }
}
