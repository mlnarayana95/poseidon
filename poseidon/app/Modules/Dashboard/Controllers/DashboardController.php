<?php

namespace App\Modules\Dashboard\Controllers;

use App\Modules\Booking\Models\Booking;
use App\Modules\Room\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\User\Models\User;

class DashboardController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['bookings'] = Booking::count();
        $data['rooms'] = Room::count();
        $data['customers'] = User::where('user_type', 1)->count();
        return view("Dashboard::index", $data);
    }
}
