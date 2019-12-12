<?php

namespace App\Modules\Location\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Location\Models\Location;

class LocationController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['locations'] = Location::all();
        return view("Location::index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Location::add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $this->validateLocation($request);

        Location::create($validated_data);

        flash('Location has been created successfully!')->success();

        return redirect()->route('admin.location.index');
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
        $data['locations'] = Location::find($id);
        return view("Location::edit", $data);
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
        $validated_data = $this->validateLocation($request);

        Location::find($id)->update($validated_data);

        flash('Location has been updated successfully!')->success();

        return redirect()->route('admin.location.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Location::find($id)->delete();
        flash('Location has been deleted successfully!')->success();
        return redirect()->route('admin.location.index');
    }

     /**
     * Validate Location Form
     * @param $request
     * @return mixed
     */
    public function validateLocation($request)
    {
        $rules = [
        'location' => 'required|min:2|max:255',
        'description' => 'required|min:2|max:255',
        'slug' => 'required|min:2|max:10',
        'image_id' => 'required',
        'is_featured' => 'required'
        ];

        $validated_data = $request->validate($rules);

        $validated_data['is_featured'] = ($request->is_featured == null) ? 0 : 1;

        return $validated_data;
    }

}


