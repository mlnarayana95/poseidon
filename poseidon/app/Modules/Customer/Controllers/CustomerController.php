<?php

namespace App\Modules\Customer\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Customer\Models\Customer;
use App\Modules\Room\Models\Room;
use App\Modules\Hotel\Models\Hotel;
use App\Modules\Room\Models\RoomType;


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
        dd('i am here');
        // Validate Form Inputs
        $validated_data = $this->validateRoom($request);

        Room::create($validated_data);

        flash('Room has been created successfully!')->success();

        return redirect()->route('admin.room.index');
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
        $data['hotels'] = Hotel::pluck('name', 'id');
        $data['types'] = RoomType::pluck('type', 'id');
        $data['room'] = Room::find($id);
        return view("Room::edit", $data);
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
        $validated_data = $this->validateRoom($request);

        Room::find($id)->update($validated_data);

        flash('Room has been updated successfully!')->success();

        return redirect()->route('admin.room.index');
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
    public function validateRoom($request)
    {
        $rules = [
            'hotel_id' => 'required',
            'room_number' => 'required|numeric',
            'room_cost' => 'required|min:2|max:10',
            'description' => 'required',
            'max_adults' => 'required|numeric',
            'max_children' => 'required|numeric',
            'room_type_id' => 'required',
            'no_bathrooms' => 'required|numeric'
        ];

        $validated_data = $request->validate($rules);

        $validated_data['smoking'] = ($request->smoking == null) ? 0 : 1;
        $validated_data['featured'] = ($request->featured == null) ? 0 : 1;

        return $validated_data;
    }
}
