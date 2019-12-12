<?php

namespace App\Modules\Frontend\Controllers;

use App\Modules\Amenity\Models\Amenity;
use App\Modules\Feature\Models\Feature;
use App\Modules\Hotel\Models\Hotel;
use App\Modules\Location\Models\Location;
use App\Http\Controllers\Controller;
use App\Modules\Room\Models\Room;
use App\Modules\Room\Models\RoomType;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['hotels'] = Hotel::getList();
        $data['amenities'] = Amenity::amenitiesWithCount();
        $data['locations'] = Location::locationsWithCount();
        return view("Frontend::hotel/list", $data);
    }

    public function show($slug)
    {
        $data['hotel'] = Hotel::with('images', 'amenities', 'location')->whereSlug($slug)->firstOrFail();
        
        //dd($data['hotel']->toArray());
        return view("Frontend::hotel/show", $data);
    }

    public function rooms($id)
    {
        $data['rooms'] = Room::getFilteredList(['hotel_id' => $id]); //dd($data['rooms']->toArray());
        $data['room_types'] = RoomType::typesWithCount();
        $data['features'] = Feature::featuresWithCount();
        $data['locations'] = Location::locationsWithCount();
        return view("Frontend::hotel/rooms", $data);
    }
}
