<?php

namespace App\Modules\Amenity\Controllers;

use App\Modules\Amenity\Models\Amenity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AmenityController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['amenity'] = Amenity::get();
        return view("Amenity::index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Amenity::add");
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
        $validated_data = $this->validateAmenity($request);

        Feature::create($validated_data);

        flash('Amenity has been created successfully!')->success();
        return redirect()->route('admin.amenity.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['amenity'] = Amenity::find($id);
        return view("Amenity::edit", $data);
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
        $validated_data = $this->validateAmenity($request);

        Amenity::find($id)->update($validated_data);

        flash('Amenity has been updated successfully!')->success();
        return redirect()->route('admin.amenity.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $amenity = new Amenity();
        $amenity->remove($id);
        flash('Amenity has been deleted successfully!')->success();
        return redirect()->route('admin.amenity.index');
    }

    /**
     * Validate Feature Form
     * @param $request
     * @return mixed
     */
    public function validateAmenity($request)
    {
        $rules = [
            'amenity' => 'required|max:255',
            'amenity_icon' => 'required|max:20'
        ];

        $validated_data = $request->validate($rules);
        return $validated_data;
    }
}
