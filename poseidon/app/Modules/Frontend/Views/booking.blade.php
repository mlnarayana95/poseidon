@extends('layouts.frontend.main')
<style>
    #details h3 {
        color: #f68500;
    }

    label {
        font-weight: bold;
    }

    .value {
        color: #717171;
    }

    #details .btn-primary {
        border-radius: 0;
        background-color: #0e2b56;
        border: none;
        width: 160px;
    }

    .accordion > .card .card-header {
        margin-bottom: 1px !important;
    }

    .title2 {
        color: #0f264b;
        padding-top: 0.8rem;
    }
</style>
@section('content')
    <div class="container py-5">

        <div class="row text-center text-white mb-5">
            <div class="col-lg-7 mx-auto">
                @include('flash::message')
                <h1 class="display-4">Your Bookings</h1>
            </div>
        </div>
        <div class="row" id="details">
            <div class="col-lg-8 mx-auto accordion" id="bookings_accordion">
                <!-- List group-->
                @if(count($bookings)>0)
                    @foreach($bookings as $key  => $booking)
                        <div class="card">
                            <div class="card-header" id="heading<?=$key + 1?>">
                                <h5 class="mb-0">
                                    <label class="title2">
                                        From: {{$booking->checkin_date.' To '.$booking->checkout_date}}</label>
                                    <button class="btn btn-link float-right" type="button" data-toggle="collapse"
                                            data-target="#collapse<?=$key + 1?>">
                                        details
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse<?=$key + 1?>" class="collapse" aria-labelledby="headingOne"
                                 data-parent="#bookings_accordion">
                                <div class="card-body">
                                    <label>Room number: </label> <span
                                            class="value">{{$booking->room->room_number}}</span><br>
                                    <label>Description: </label><br>
                                    <p class="text-justify value">
                                        {{$booking->room->description}}
                                    </p>
                                    <label>Checkin date: </label> <span
                                            class="value">{{$booking->checkin_date}} </span><br>
                                    <label>Checkout date: </label> <span
                                            class="value">{{$booking->checkout_date}} </span><br>
                                    <label>Transaction No: </label> <span
                                            class="value">{{$booking->transaction_number}}</span><br>
                                    <label>Adults: </label> <span
                                            class="value">{{$booking->adults}}</span><br>
                                    <label>Children: </label> <span
                                            class="value">{{$booking->children}}</span><br>
                                    <label>Room cost: </label> <span
                                            class="value">{{format_price($booking->room_cost)}}</span><br>
                                    <label>Total Fees: </label> <span
                                            class="value">{{format_price($booking->total_fees)}}</span><br>
                                    <label>Total Tax: </label> <span
                                            class="value">{{format_price($booking->total_tax)}}</span><br>
                                    <label>Total Cost: </label> <span
                                            class="value">{{format_price($booking->total_cost)}}</span><br>
                                    <label>Payment Type: </label> <span
                                            class="value">{{$booking->payment_type}}</span><br>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                        <h3 class="title2">You do not booked anything yet</h3>
                @endif
            </div>
        </div>
    </div>
@endsection
