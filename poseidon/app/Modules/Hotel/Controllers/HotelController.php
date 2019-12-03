<?php

namespace App\Modules\Hotel\Controllers;

use App\Modules\Hotel\Models\Hotel;
use App\Modules\Location\Models\Location;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{

    protected $rules = [
        'name' => 'required|min:2|max:255',
        'address' => 'required|min:2|max:255',
        'postal_code' => 'required|min:2|max:10',
        'phone_number' => 'required|min:10|max:16',
        'checkin_time' => 'required',
        'checkout_time' => 'required'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['hotels'] = Hotel::with('location')->get();
        return view("Hotel::index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['locations'] = Location::pluck('location', 'id');
        return view("Hotel::add", $data);
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
        $validated_data = $this->validateHotel($request);

        Hotel::create($validated_data);

        flash('Hotel has been created successfully!')->success();

        return redirect()->route('hotel.index');
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

    /**
     * Validate Hotel Form
     * @param $request
     * @return mixed
     */
    public function validateHotel($request)
    {
        $validated_data = $request->validate($this->rules);

        $validated_data['description'] = $request->description;
        $validated_data['location_id'] = $request->location_id;
        $validated_data['airport_distance'] = $request->airport_distance;
        $validated_data['airport_transportation'] = $request->airport_transportation;
        $validated_data['pet_friendly'] = $request->pet_friendly;
        $validated_data['checkin_time'] = Carbon::createFromFormat('H:i A', $request->checkin_time)->toTimeString();
        $validated_data['checkout_time'] = Carbon::createFromFormat('H:i A', $request->checkout_time)->toTimeString();

        return $validated_data;
    }
}
