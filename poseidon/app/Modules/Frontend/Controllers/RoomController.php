<?php

namespace App\Modules\Frontend\Controllers;

use App\Modules\Amenity\Models\Amenity;
use App\Modules\Feature\Models\Feature;
use App\Modules\Hotel\Models\Hotel;
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
        $data['rooms'] = $this->room->getList();
        $data['room_types'] = RoomType::all();
        $data['hotels'] = Hotel::all();
        $data['amenities'] = Amenity::all();
        $data['features'] = Feature::all();
        return view("Frontend::room/list", $data);
    }
}
