<?php

namespace App\Modules\Frontend\Controllers;

use App\Modules\Room\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Pagerange\Bx\_5bx;

class BookingController extends Controller
{
    /**
     * Confirm Booking
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $id = (int)request('room_id');
        $check_in_date = request('checkin');
        $checkout_date = request('checkout');

        if($id == 0 || $check_in_date == null || $checkout_date == null)
            abort(404);

        $date1 = Carbon::createFromFormat('Y-m-d', $check_in_date);
        $date2 = Carbon::createFromFormat('Y-m-d', $checkout_date);

        $no_nights = $date1->diffInDays($date2);

        $data['room'] = Room::with('hotel', 'type', 'features', 'featuredImage')
            ->findOrFail($id);

        //dd($data['room']->toArray());

        $data['other_info'] = [
            'checkin_date' => $check_in_date,
            'checkout_date' => $checkout_date,
            'no_nights' => $no_nights
        ];

        return view("Frontend::room/booking", $data);
    }

    public function save(Request $request)
    {
        $rules = [
            'username' => 'max:255',
            'cardNumber' => 'required|integer',
            'month' => 'required|digits:2',
            'year' => 'required|digits:2',
            'cvv' => 'required|digits:3'
        ];

        $request->validate($rules);

        $cost = Room::calculateRoomCost($request['room_id'], $request['checkin'], $request['checkout']);

        $booking_details = array_merge($request->all(), $cost);
        // Payment
        $transaction = new _5bx(setting('5BX_LOGIN_ID'), setting('5BX_API_KEY'));
        $response = $this->processTransaction($transaction, $booking_details);

        if(!empty($response->transaction_response->errors)) { //dd('ok');
            flash()->error('Provided Credit Card Information was not valid. Please Try Again.');
            return redirect()->back()->withErrors($response->transaction_response->errors);
        }

    }

    function processTransaction(_5bx $transaction, Array $booking_details)
    {
        $transaction->amount($booking_details['total_cost']); // total sale
        $transaction->card_num($booking_details['cardNumber']); // credit card number
        $transaction->exp_date($booking_details['month'].$booking_details['year']); // expiry date month and year (august 2022)
        $transaction->cvv($booking_details['cvv']); // card cvv number
        //$transaction->ref_num('2011099'); // your reference or invoice number
        $transaction->card_type('visa'); // card type (visa, mastercard, amex)
        return $transaction->authorize_and_capture(); // returns JSON object

    }
}
