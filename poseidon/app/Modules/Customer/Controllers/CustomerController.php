<?php

namespace App\Modules\Customer\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Customer\Models\Customer;
use App\Modules\Room\Models\Room;
use App\Modules\Hotel\Models\Hotel;
use App\Modules\Room\Models\RoomType;
use Carbon\Carbon;


class CustomerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['customers'] = Customer::with('user')->get();
        return view("Customer::index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Customer::add');
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
        $validated_data = $this->validateCustomer($request);
        $validated_data['user_id'] = 1;
        Customer::create($validated_data);  
        flash('Customer has been created successfully!')->success();

        return redirect()->route('admin.customer.index');
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
        $data['customer'] = Customer::find($id);
        $customer = $data['customer']->toArray();
        $birthdate = $customer['birthdate'];
        $customer['birthdate'] = Carbon::parse($birthdate)->format('m d Y');
        $data['customer'] = $customer;
        return view("Customer::edit", $data);
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
        $validated_data = $this->validateCustomer($request);

        Customer::find($id)->update($validated_data);

        flash('Customer has been updated successfully!')->success();

        return redirect()->route('admin.customer.index');
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Validate Room Form
     * @param $request
     * @return mixed
     */
    public function validateCustomer($request)
    {
        $rules = [
            'first_name' => 'required|min:2|max:10',
            'last_name' => 'required|min:2|max:10',
            'birthdate' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'phone_number' => 'required'
        ];

        $validated_data = $request->validate($rules);
        $validated_data['first_name'] = $request->first_name;
        $validated_data['last_name'] = $request->last_name;
        $validated_data['birthdate'] = $request->birthdate;
        $validated_data['address'] = $request->address;
        $validated_data['postal_code'] = $request->postal_code;
        $validated_data['phone_number'] = $request->phone_number;
        $validated_data['birthdate'] = Carbon::parse($request->birthdate)->format('Y-m-d');
        return $validated_data;
    }
}
