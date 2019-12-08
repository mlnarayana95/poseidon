<?php

namespace App\Modules\Booking\Controllers;

use App\Modules\Room\Models\Room;
use App\Modules\Room\Models\RoomType;
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
        $data['date_info']= $check_in_date.'|'.$checkout_date.'|'.$no_nights;
        dd($data);
        return view("Booking::index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
}
