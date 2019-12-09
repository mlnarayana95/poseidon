<?php

namespace App\Modules\Amenity\Controllers;

use App\Modules\Feature\Models\Feature;
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
        $data['features'] = Feature::get();
        return view("Feature::index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Feature::add");
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
        $validated_data = $this->validateFeature($request);

        Feature::create($validated_data);

        flash('Feature has been created successfully!')->success();
        return redirect()->route('admin.feature.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['feature'] = Feature::find($id);
        return view("Feature::edit", $data);
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
        $validated_data = $this->validateFeature($request);

        Feature::find($id)->update($validated_data);

        flash('Feature has been updated successfully!')->success();
        return redirect()->route('admin.feature.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feature = new Feature();
        $feature->remove($id);
        flash('Feature has been deleted successfully!')->success();
        return redirect()->route('admin.feature.index');
    }

    /**
     * Validate Feature Form
     * @param $request
     * @return mixed
     */
    public function validateFeature($request)
    {
        $rules = [
            'feature' => 'required|max:255',
            'feature_icon' => 'required|max:20'
        ];

        $validated_data = $request->validate($rules);
        return $validated_data;
    }
}
