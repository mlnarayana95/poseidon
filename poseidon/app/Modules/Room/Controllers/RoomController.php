<?php

namespace App\Modules\Room\Controllers;

use App\Modules\Feature\Models\Feature;
use App\Modules\Hotel\Models\Hotel;
use App\Modules\Room\Models\FeatureRoom;
use App\Modules\Room\Models\Room;
use App\Modules\Base\Models\Image;
use App\Modules\Room\Models\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB; 

class RoomController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rooms'] = Room::with('type', 'hotel')->get();
        return view("Room::index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['hotels'] = Hotel::pluck('name', 'id');
        $data['types'] = RoomType::pluck('type', 'id');
        $data['features'] = Feature::pluck('feature', 'id');
        return view("Room::add", $data);
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

        DB::beginTransaction();

        try {
            $room = Room::create($validated_data);

            /* Feature Add */
            foreach ($validated_data['features'] as $feature_id) {
                FeatureRoom::create(['room_id' => $room->id, 'feature_id'=>$feature_id]);
            }

            foreach ($validated_data['images'] as $image_id) {
                DB::table('image_room')->insert(
                    ['room_id' => $room->id, 'image_id' => $image_id]
                );
            }

            DB::commit();
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            //dd($e);
            // something went wrong
        }

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
        $data['features'] = Feature::pluck('feature', 'id');
        $data['room'] = Room::with('features')->find($id);
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
        $validated_data = $this->validateRoom($request, false);

        DB::beginTransaction();

        try {
            // Remove Features
            if (isset($request['features'])) {
                FeatureRoom::whereNotIn('feature_id', $request['features'])->delete();
            }

            foreach ($validated_data['features'] as $feature_id) {
                FeatureRoom::updateOrCreate(['room_id' => $id,'feature_id'=>$feature_id]);
            }

            foreach ($validated_data['images'] as $image_id) {
                DB::table('image_room')->insert(
                    ['room_id' => $id, 'image_id' => $image_id]
                );
            }

            Room::find($id)->update($validated_data);

            DB::commit();
            // all good
        } catch (\Exception $e) {
            DB::rollback(); dd($e);
            // something went wrong
        }

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
        Room::find($id)->delete();
        flash('Room has been deleted successfully!')->success();
        return redirect()->route('admin.room.index');
    }

    public function saveImage($name)
    {  
        Image::create(['file_name'=>$name]);
        $image = DB::table('images')->latest('id')->first();  
        $image_id = $image->id;
        return $image_id;
    }

    /**
     * Validate Room Form
     * @param $request
     * @param $add boolean
     * @return mixed
     */
    public function validateRoom($request, $add = true)
    {
        $rules = [
            'hotel_id' => 'required',
            'room_number' => 'required|numeric',
            'room_cost' => 'required|min:2|max:10',
            'description' => 'required',
            'max_adults' => 'required|numeric',
            'max_children' => 'required|numeric',
            'room_type_id' => 'required',
            'no_bathrooms' => 'required|numeric',
            'features' => 'required',
            'image.*' => 'image'
        ];

        if($add) {
            $rules['image'] = 'required';
            $rules['image.*'] = 'image';
        }
    
        $validated_data = $request->validate($rules);
        $data = [];
        $images= [];

        if($request->hasFile('image'))
        {
            foreach($request->file('image') as $image)
            { 
                
                 $name=$image->getClientOriginalName();
                    $image->move(public_path().'/images/rooms/', $name);
                    array_push($data,$name);
                    $image_id = $this->saveImage($name);
                    array_push($images,$image_id);
            }
        }
        $validated_data['images'] = $images;

        $validated_data['smoking'] = ($request->smoking == null) ? 0 : 1;
        $validated_data['featured'] = ($request->featured == null) ? 0 : 1;

        return $validated_data;
    }
}
