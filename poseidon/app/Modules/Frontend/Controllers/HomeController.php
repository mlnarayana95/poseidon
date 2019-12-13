<?php

namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Location\Models\Location;
use App\Modules\Room\Models\Room;
use App\Modules\User\Models\User;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rooms'] = Room::with('images', 'type', 'hotel')->take(3)->get();
        $data['stats']['customers'] = User::where('user_type', 0)->count();
        $data['stats']['destinations'] = Location::count();
        $data['stats']['rooms'] = Room::count();
        //dd($data['rooms']->toArray());
        return view("Frontend::home", $data);
    }
}
