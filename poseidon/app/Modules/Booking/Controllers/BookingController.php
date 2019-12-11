<?php

namespace App\Modules\Booking\Controllers;


use App\Modules\User\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DateTime;
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
        $data['booking'] = Booking::get();
        return view("Room::index", $data);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function create()
    {
        $id = (int)request('room_id');
        $check_in_date = request('checkin');
        $checkout_date = request('checkout');
        $date1 = new Datetime($check_in_date);
        $date2 = new Datetime($checkout_date);
        $no_nights = $date2->diff($date1)->format('%a');
        $data['room'] = DB::table('rooms')
            ->join('room_types','rooms.room_type_id','=','room_types.id')
            ->join('image_rooms','rooms.id','=','image_rooms.room_id')
            ->join('images','images.id','=','image_rooms.image_id')
            ->where('rooms.id','=',$id)
            ->select(
                'rooms.id'
                ,'rooms.room_number'
                ,'rooms.description'
                ,'room_types.type'
                ,'rooms.max_adults'
                ,'rooms.max_children'
                ,'rooms.no_bathrooms'
                ,'rooms.smoking'
                ,'rooms.room_cost'
                ,'images.file_name'
            )
            ->first();
        $tax1 = DB::table('site_settings')->where('name','=','psd_tax')->select('value')->first();
        $tax2 = DB::table('site_settings')->where('name','=','gst_tax')->select('value')->first();
        $psd_tax = (double)$tax1->value;
        $gst_tax = (double)$tax2->value;
        $data['other_info']=['psd_tax' =>$psd_tax, 'gst_tax'=>$gst_tax,'checkin_date'=>$check_in_date,'checkout_date'=>$checkout_date,'no_nights'=>$no_nights];
        return view("Booking::index",$data);
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
        $validated_data = $this->validateRoom($request);

        Room::create($validated_data);

        flash('Booking has been created successfully!')->success();
        return redirect()->route('admin.booking.index');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['booking'] = Room::with('features')->find($id);
        return view("Booking::edit", $data);
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
        $validated_data = $this->validateBooking($request);

        Room::find($id)->update($validated_data);

        flash('Booking has been updated successfully!')->success();
        return redirect()->route('admin.booking.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::find($id)->delete();
        flash('Booking has been deleted successfully!')->success();
        return redirect()->route('admin.booking.index');
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
