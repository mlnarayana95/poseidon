<?php

namespace App\Modules\Frontend\Controllers;

use App\Modules\Amenity\Models\Amenity;
use App\Modules\Feature\Models\Feature;
use App\Modules\Hotel\Models\Hotel;
use App\Modules\Location\Models\Location;
use App\Http\Controllers\Controller;
use App\Modules\Room\Models\Room;
use App\Modules\Room\Models\RoomType;

class DestinationController extends Controller
{
    public function rooms($id)
    {
        $data['rooms'] = Room::getFilteredList(['hotel_id' => $id]); //dd($data['rooms']->toArray());
        $data['hotels'] = Hotel::hotelsWithCount($id);
        $data['room_types'] = RoomType::typesWithCount();
        $data['features'] = Feature::featuresWithCount();
        return view("Frontend::hotel/rooms", $data);
    }
}
