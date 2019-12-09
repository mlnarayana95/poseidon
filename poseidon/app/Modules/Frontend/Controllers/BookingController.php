<?php

namespace App\Modules\Frontend\Controllers;

use App\Modules\Room\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DateTime;
use DB;

class BookingController extends Controller
{
    public function index()
    {
        $id = (int)request('room_id');
        $check_in_date = request('checkin');
        $checkout_date = request('checkout');

        $date1 = Carbon::createFromFormat('Y-m-d', $check_in_date);
        $date2 = Carbon::createFromFormat('Y-m-d', $checkout_date);

        $no_nights = $date1->diffInDays($date2);

        $data['room'] = Room::with('hotel', 'type', 'features', 'featuredImage')
            ->findOrFail($id);

        $tax1 = DB::table('site_settings')->where('name', '=', 'pst_tax')->select('value')->first();
        $tax2 = DB::table('site_settings')->where('name', '=', 'gst_tax')->select('value')->first();

        $psd_tax = (double)$tax1->value;
        $gst_tax = (double)$tax2->value;
        $data['other_info'] = [
            'psd_tax' => $psd_tax,
            'gst_tax' => $gst_tax,
            'checkin_date' => $check_in_date,
            'checkout_date' => $checkout_date,
            'no_nights' => $no_nights
        ];

        return view("Frontend::room/booking", $data);
    }
}
