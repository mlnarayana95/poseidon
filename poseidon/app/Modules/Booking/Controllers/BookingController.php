<?php

namespace App\Modules\Booking\Controllers;


use App\Http\Controllers\Controller;
use DB;
class BookingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('Entered into index methods controller');
        $data['booking'] = Booking::get();
        $data['rooms'] = Room::pluck('room_number', 'id');
        $data['customers'] = Customer::pluck('id','first_name','last_name');

        dd($data->toArray());
        return view("Booking::index", $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Validate Bookings Form
     * @param $request
     * @return mixed
     */
    public function validateBooking($request)
    {
        $rules = [
            'user_id' => 'required|number',
            'room_id' => 'required|number',
            'transaction_number' => 'required|numeric',
            'room_cost' => 'required|min:2|max:10|between:0,99.99',
            'total_fees' => 'required|min:2|max:10|between:0,99.99',
            'total_tax' => 'required|min:2|max:10|between:0,99.99',
            'total_cost' => 'required|min:2|max:10|between:0,99.99',
            'payment_type' => 'required|regex:/^[\pL\s\-]+$/u',
            'amount_payment' => 'required|min:2|max:10|between:0,99.99',
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date|after:dateline_start'
        ];
        $validated_data = $request->validate($rules);
        return $validated_data;
    }
}
