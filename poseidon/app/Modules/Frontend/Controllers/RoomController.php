<?php

namespace App\Modules\Frontend\Controllers;

use App\Modules\Feature\Models\Feature;
use App\Modules\Hotel\Models\Hotel;
use App\Modules\Location\Models\Location;
use App\Modules\Room\Models\Room;
use App\Modules\Room\Models\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Pagerange\Bx\_5bx;

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

    public function payment()
    {
        // You need your login and API key to begin
        $transaction = new _5bx(env('5BX_LOGIN_ID'), env('5BX_API_KEY'));

        $response = $this->processTransaction($transaction);

        // Figure out what's in the response and how to use it
        dd($response);
    }

    function processTransaction(_5bx $transaction)
    {
        // Replace hard coded values with your own variables
        $transaction->amount('5.99'); // total sale
        $transaction->card_num('4111111111111111'); // credit card number
        $transaction->exp_date('0822'); // expiry date month and year (august 2022)
        $transaction->cvv('333'); // card cvv number
        $transaction->ref_num('2011099'); // your reference or invoice number
        $transaction->card_type('visa'); // card type (visa, mastercard, amex)
        return $transaction->authorize_and_capture(); // returns JSON object

    }
}
