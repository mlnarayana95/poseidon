<?php

namespace App\Modules\Frontend\Controllers;

use App\Modules\Feature\Models\Feature;
use App\Modules\Hotel\Models\Hotel;
use App\Modules\Location\Models\Location;
use App\Modules\Room\Models\Room;
use App\Modules\Room\Models\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{

    protected $room;

    function __construct(Room $room)
    {
        $this->room = $room;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rooms'] = Room::getList();
        $data['room_types'] = RoomType::typesWithCount();
        $data['hotels'] = Hotel::hotelsWithCount();
        $data['features'] = Feature::featuresWithCount();
        $data['locations'] = Location::locationsWithCount();
        return view("Frontend::room/list", $data);
    }

    /**
     * Get Filtered Result Based on the Search Queries Provided
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $data['rooms'] = Room::getFilteredList($request->all());
        //dd($data['rooms']->toArray());
        $data['room_types'] = RoomType::typesWithCount();
        $data['hotels'] = Hotel::hotelsWithCount();
        $data['features'] = Feature::featuresWithCount();
        $data['locations'] = Location::locationsWithCount();
        return view("Frontend::room/search", $data);
    }

    /**
     * Get Room Details
     * @param $room_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($room_id)
    {
        $data['room'] = Room::with('features', 'bookings', 'images', 'type', 'hotel.amenities')
            ->findOrFail($room_id);

        //dd($data['room']->toArray());
        return view("Frontend::room/show", $data);
    }
}
