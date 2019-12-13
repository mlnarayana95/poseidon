<?php

namespace App\Modules\Booking\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    public $fillable = [
        'user_id',
        'room_id',
        'transaction_number',
        'room_cost',
        'total_fees',
        'total_tax',
        'total_cost',
        'payment_type',
        'adults',
        'children',
        'checkin_date',
        'checkout_date'
    ];

    /**
     * Get all of the customer for the customer
     */
    public function user()
    {
        return $this->belongsTo('App\Modules\User\Models\User');
    }

    /**
     * Get all of the room for the room
     */
    public function room()
    {
        return $this->belongsTo('App\Modules\Room\Models\Room');
    }

    /**
     * @param array $booking_details
     */
    public static function book(Array $booking_details)
    {
        self::create([
            'user_id' => auth()->user()->id,
            'room_id' => $booking_details['room_id'],
            'transaction_number' => $booking_details['transaction_number'],
            'room_cost' => $booking_details['room_cost'],
            'total_fees' => $booking_details['total_fees'],
            'total_tax' => $booking_details['total_tax'],
            'total_cost' => $booking_details['total_cost'],
            'payment_type' => 'Card',
            'adults' => $booking_details['adults'],
            'children' => $booking_details['children'],
            'checkin_date' => $booking_details['checkin_date'],
            'checkout_date' => $booking_details['checkout_date']
        ]);
    }

}
