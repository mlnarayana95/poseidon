@extends('layouts.admin.main')
@section('title', 'Bookings')
@section('heading', 'Bookings')
@section('breadcrumb')
    @parent
    <li>
        <a href="#">Rooms</a>
    </li>
@stop

@section('content')
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Booking Details</h3>
            </div>
            <div class="box-body">
                <label>Client Name: </label> <span class="value">{{$booking->user->person->first_name. ' '.$booking->user->person->last_name}}</span><br>
                <label>Hotel: </label> <span class="value">{{$booking->room->hotel->name}}</span><br>
                <label>Room number: </label> <span class="value">{{$booking->room->room_number}}</span><br>
                <label>Room id: </label> <span class="value">{{$booking->room_id}}</span><br>
                <label>Room number: </label> <span class="value">{{$booking->room->type->type}}</span><br>
                <label>Checkin date: </label> <span class="value">{{$booking->checkin_date}} </span><br>
                <label>Checkout date: </label> <span class="value">{{$booking->checkout_date}} </span><br>
                <label>Transaction No: </label> <span class="value">{{$booking->transaction_number}}</span><br>
                <label>Room cost: </label> <span class="value">{{format_price($booking->room_cost)}}</span><br>
                <label>Total Fees: </label> <span class="value">{{format_price($booking->total_fees)}}</span><br>
                <label>Total Tax: </label> <span class="value">{{format_price($booking->total_tax)}}</span><br>
                <label>Total Cost: </label> <span class="value">{{format_price($booking->total_cost)}}</span><br>
                <label>Payment Type: </label> <span class="value">{{$booking->payment_type}}</span><br>
                <label>Amount paid: </label> <span class="value">{{format_price($booking->amount_payment)}}</span><br>
            </div>
        </div>
    </div>
@endsection
