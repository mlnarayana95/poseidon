@extends('layouts.frontend.main')
<style>
    #details h3{
        color: #f68500;
    }
    #details .value{
        color: #0f264b;
    }
    #details .btn-primary {
        border-radius: 0;
        background-color: #0e2b56;
        border: none;
        width: 160px;
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
            <div class="col-lg-8 mx-auto">
                <!-- List group-->
                <ul class="list-group shadow">
                @foreach($bookings as $booking)
                    <!-- list group item-->
                        <li class="list-group-item">
                            <!-- Custom content-->
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                <div class="media-body order-2 order-lg-1">
                                    <h3>Booking Details</h3>
                                    <br>
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
                                <!--<img src="https://png2.kisspng.com/sh/6ed0d41aa194fb899f8ed29aa948b1ee/L0KzQYq3U8A1N5dxepH0aYP2gLBuTfFxeJ1qRdt5aHBxdX7Bk71uaakygeJxb37oPcn5TgNuaaN5iNp4bnWwecHvjB5mNWZoRdt5aHBxdX7Bkr0zPWdsep92aT3meLK0iBNpNZl0jJ9taT24c4jqhcFnbZQ7e6VtOD60QIe7WckxQWI6TaMBOEi0SYGBUcQzNqFzf3==/kisspng-apple-iphone-xs-max-iphone-xr-smartphone-iphone-5c-iphone-xr-256gb-mi-cha-kch-hot-di-5c7ce1fec6c3d8.1064990915516881908142.png" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">-->
                            </div> <!-- End -->
                            <a href="/profile/booking/{{$booking->id}}" class="btn btn-primary">Booking Details</a>
                        </li> <!-- End -->
                    @endforeach
                </ul> <!-- End -->

            </div>
        </div>
    </div>
@endsection
