<?php

namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Room\Models\Room;

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
        //dd($data['rooms']->toArray());
        return view("Frontend::home", $data);
    }
}
