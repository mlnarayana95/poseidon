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
     * Get the Admin Dashboard
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index()
    {
        // Get Booking For Only Upcoming 3 Months
        $data['bookings'] = Booking::with('user.person', 'room')
            ->where('checkin_date', '<',(new \Carbon\Carbon)->addMonths(3))
            ->where('checkin_date', '>',(new \Carbon\Carbon)->now())
            ->get();
        $data['booking'] = Booking::count();
        $data['rooms'] = Room::count();
        $data['customers'] = User::where('user_type', 1)->count();
        return view("Dashboard::index", $data);
    }
}
