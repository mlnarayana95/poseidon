<?php

namespace App\Modules\Frontend\Controllers;

use App\Modules\Booking\Models\Booking;
use App\Modules\Room\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Pagerange\Bx\_5bx;

class BookingController extends Controller
{
    /**
     * Confirm Booking
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if(request()->ajax())
        {
            $rules = [
                'adults' => 'required',
                'dates' => 'required'
            ];

            $validator = \Validator::make(request()->all(), $rules);
            if ($validator->fails())
                return response()->json(['status' => 0, 'errors' => $validator->getMessageBag()->toArray()]);
            else
                return response()->json(['status' => 1]);
        }

        // if validates
        $id = (int)request('room_id');
        $dates = explode(" to ", request('dates'));

        if($id == 0 || $dates == null)
            abort(404);

        $check_in_date = $dates[0];
        $checkout_date = $dates[1];

        $date1 = Carbon::createFromFormat('Y-m-d', $check_in_date);
        $date2 = Carbon::createFromFormat('Y-m-d', $checkout_date);

        if(!(Room::isBookingAvailable($id, $check_in_date, $checkout_date)))
            abort(404);

        $no_nights = $date1->diffInDays($date2);

        $data['room'] = Room::with('hotel', 'type', 'features', 'images')
            ->findOrFail($id);

        $data['cost'] = Room::calculateRoomCost($id, $check_in_date, $checkout_date);

        // To save the current session url
        session()->put('booking_url', request()->getRequestUri());

        //dd($data['cost']);

        $data['other_info'] = [
            'checkin_date' => $check_in_date,
            'checkout_date' => $checkout_date,
            'adults' => request('adults'),
            'children' => (request('children') == '')? 0 : request('children'),
            'no_nights' => $no_nights
        ];

        return view("Frontend::room/booking", $data);
    }

    /**
     * Save Booking for the Logged In User
     * @todo work on the middleware
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(Request $request)
    {
        $rules = [
            'username' => 'max:255',
            'cardNumber' => 'required|numeric',
            'month' => 'required',
            'year' => 'required|digits:2',
            'cvv' => 'required|digits:3'
        ];

        $request->validate($rules);

        $cost = Room::calculateRoomCost($request['room_id'], $request['checkin_date'], $request['checkout_date']);

        $booking_details = array_merge($request->all(), $cost);
        // Payment
        $transaction = new _5bx(setting('5BX_LOGIN_ID'), setting('5BX_API_KEY'));
        $response = $this->processTransaction($transaction, $booking_details);

        if(!empty($response->transaction_response->errors)) {
            return redirect()->back()->withErrors($response->transaction_response->errors)->with('cc_error', 1);
        }

        $booking_details['transaction_number'] = $response->transaction_response->trans_id;

        // Create the booking
        Booking::book($booking_details);

        // Send the mail
        flash()->success('Booking has been made successfully');
        return redirect('/profile/bookings');

    }
    public function show(){
        $user_id= auth()->user()->id;
        $bookings = Booking::with('room')
            ->where('user_id', $user_id)->get();
        return view('Frontend::booking',compact('bookings'));
    }

    function processTransaction(_5bx $transaction, Array $booking_details)
    {
        $transaction->amount($booking_details['total_cost']); // total sale
        $transaction->card_num($booking_details['cardNumber']); // credit card number
        $transaction->exp_date($booking_details['month'].$booking_details['year']); // expiry date month and year (august 2022)
        $transaction->cvv($booking_details['cvv']); // card cvv number
        //$transaction->ref_num('2011099'); // your reference or invoice number
        $transaction->card_type($booking_details['cardType']); // card type (visa, mastercard, amex)
        return $transaction->authorize_and_capture(); // returns JSON object

    }
}
