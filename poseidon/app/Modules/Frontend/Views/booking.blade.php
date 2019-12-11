@extends('layouts.frontend.main')
<style>
    #details h3 {
        color: #f68500;
    }

    #details .value {

    }

    #details .btn-primary {
        border-radius: 0;
        background-color: #0e2b56;
        border: none;
        width: 160px;
    }
    .accordion>.card .card-header{
        margin-bottom: 1px!important;
    }
    .title2{
        color: #0f264b;
        padding-top: 0.8rem;
    }
</style>
@section('content')
    <div class="container py-5">
        <div class="row text-center text-white mb-5">
            <div class="col-lg-7 mx-auto">
                <h1 class="display-4">Your Bookings</h1>
            </div>
        </div>
        <div class="row" id="details">
            <div class="col-lg-8 mx-auto accordion" id="bookings_accordion">
                <!-- List group-->
                @foreach($bookings as $key  => $booking)
                    <div class="card">
                        <div class="card-header" id="heading<?=$key+1?>">
                            <h5 class="mb-0">
                                <label class="title2"> From: {{$booking->checkin_date.' To '.$booking->checkout_date}}</label>
                                <button class="btn btn-link float-right" type="button" data-toggle="collapse" data-target="#collapse<?=$key+1?>">
                                   details
                                </button>
                            </h5>
                        </div>
                        <div id="collapse<?=$key+1?>" class="collapse" aria-labelledby="headingOne" data-parent="#bookings_accordion">
                            <div class="card-body">
                                <label>Room number: </label> <label class="value">{{$booking->room->room_number}}</label><br>
                                <label>Description: </label><br>
                                <p class="text-justify value">
                                    {{$booking->room->description}}
                                </p>
                                <label>Checkin date: </label> <label class="value">{{$booking->checkin_date}} </label><br>
                                <label>Checkout date: </label> <label class="value">{{$booking->checkout_date}} </label><br>
                                <label>Transaction No: </label> <label class="value">{{$booking->transaction_number}}</label><br>
                                <label>Room cost: </label> <label class="value">{{number_format($booking->room_cost)}}</label><br>
                                <label>Total Fees: </label> <label class="value">{{number_format($booking->total_fees)}}</label><br>
                                <label>Total Tax: </label> <label class="value">{{number_format($booking->total_tax)}}</label><br>
                                <label>Total Cost: </label> <label class="value">{{number_format($booking->total_cost)}}</label><br>
                                <label>Payment Type: </label> <label class="value">{{$booking->payment_type}}</label><br>
                                <label>Amount paid: </label> <label class="value">{{number_format($booking->amount_payment)}}</label><br>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
