@extends('layouts.frontend.main')
<style>
    /*start Booking style*/
    #info_head {
        background-color: #fff;
        padding: 20px;
        box-shadow: 0px 6px 5px 0px rgba(201, 197, 201, 1);
    }

    #det_header .col-md {
        padding-right: 20px;
        margin-right: 5px;
    }

    #det_header .col-md h4 {
        font-size: 15px;
    }

    #det_header .col-md h3 {
        font-size: 18px;
        color: #0e2b56;
    }

    #det_header label {
        font-size: 10px;
    }

    #det_header .btn {
        border-radius: 0;
        padding: 15px;
        font-size: 15px;
        background-color: #0f264b;
    }

    @media only screen and (min-width: 768px) and (max-width: 959px) {
        #det_header .col-md {
            text-align: left;
        }
    }

    /*start content styles*/
    #content {
        margin-top: 5px;
        padding: 50px;
        background-color: #e2e2e2;
    }

    #content .container h1 {
        font-size: 24px;
        color: #0f264b;
        margin-top: 10px;
        margin-bottom: 10px;
        font-weight: bolder;
    }

    #content .col-md-7 {
        background-image: url("{{ URL::to('/')."/images/rooms/".$room->file_name }}");
        background-size: cover;
        background-position: right;
        /*box-shadow: 7px 7px 5px 0px rgba(166, 166, 166, 1);*/
    }

    #content .col-md-5 {
        /*box-shadow: 7px 7px 5px 0px rgba(166, 166, 166, 1);*/
        background-color: #fff;
        border-bottom: 1px solid #e2e2e2;
    }

    #content .container .col-md-5 h2 {
        font-size: 20px;
        color: #0f264b;
        font-weight: bold;
        padding: 20px 0 0 0;
        margin: 0;
    }

    #content .container .col-md-5 a {
        text-decoration: none;
        text-transform: uppercase;
        font-weight: bold;
        color: #f68500;
        font-size: 15px;
        background-color: #fff !important;
    }

    #content .container .col-md-5 .det_type {
        padding-top: 5px;
        font-size: 16px;
        font-weight: bold;
        color: #0f264b;
    }

    #content .col-md-12 {
        background-color: #fff;
    }

    #content .col-md-12 h1 {
        text-align: left;
        font-size: 20px;
    }

    #content .col-md-6 {
        background-color: #fff;
        font-size: 16px;
    }

    #content .col-md-6 .value {
        color: #0f264b;
    }

    #content .col-md-12 a {
        border-radius: 0;
        padding: 10px;
        margin: 10px;
        background-color: #0f264b;
        color: #fff;
    }

    @media only screen and (max-width: 468px) {

    }
    #checkout ul.nav li:first-child{
        border-right: none;
    }
    #checkout ul.nav li .fa{
        color: #fff;
    }
    #checkout ul.nav a:hover{
        background-color: #1a5297;
        color: #0f264b;
    }

    /*end content styles*/
</style>
@section('content')
    <div class="container-fluid fixed" id="info_head">
        <div class="container">
            <div class="row" id="det_header">
                <div class="col-md">
                    <h4>Stay Dates</h4>
                    <h3 class="text-left">
                        <?=str_replace("-", "/", $other_info['checkin_date']) . ' - ' . str_replace("-", "/",
                            $other_info['checkout_date'])?>
                    </h3>
                </div>
                <div class="col-md">
                    <h4>Total for Stay</h4>
                    <h3 class="text-left">
                        <?=number_format((double)$room->room_cost * (double)$other_info['no_nights']);?> CAD
                    </h3>
                </div>
                <div class="col-md text-right">
                    <a class="btn btn-dark" href="#">Continue</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="content">
        <div class="container">
            <div class="row">
                <h1>Review Reservation Details</h1>
            </div>
            <div class="row">
                <div class="col-md-7">
                </div>
                <div class="col-md-5">
                    <h2 class="text-left">Guest room, {{$room->type}}</h2>
                    <a href="#">Room details</a>
                    <br>
                    <label class="det_type">Room:</label> <label>{{$room->room_number}}</label>
                    <br>
                    <label class="det_type">Description</label>
                    <p>{{$room->description}}</p>
                    <label class="det_type">Adults Capacity:</label> <label>{{$room->max_adults}}</label>
                    <label class="det_type">Children Capacity:</label> <label>{{$room->max_adults}}</label>
                    <label class="det_type">No. Bathrooms:</label> <label>{{$room->max_adults}}</label>
                    <br>
                    <label class="det_type">Smoking:</label> <label>@if( $room->smoking == 1) Yes @else
                            No @endif</label>
                    <br>
                    <label class="det_type">Cost per night:</label> <label>{{number_format((double)$room->room_cost)}}
                        CAD</label>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Rate Details</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-6">
                    <label class="value">1</label> <label>room(s) for</label><label
                            class="value">{{$other_info['no_nights']}}</label>
                    <label>nights</label>
                    <br>
                    <label>Price:</label>
                    <br>
                    <label>GST Tax:</label>
                    <br>
                    <label>PSD Tax:</label>
                    <hr>
                    <label>Total Stay:</label>
                </div>
                <div class="col-md-6 col-md-6 text-right">
                    <label>Prices in CAD</label>
                    <br>
                    <label class="value">{{number_format((double)$room->room_cost)}}</label>
                    <br>
                    <label class="value">{{$other_info['gst_tax']*$room->room_cost}}</label>
                    <br>
                    <label class="value">{{$other_info['psd_tax']*$room->room_cost}}</label>
                    <hr>
                    <label class="value">{{
                    number_format(
                    ($other_info['psd_tax']*$room->room_cost)+
                    ($other_info['gst_tax']*$room->room_cost)+
                    ((double)$room->room_cost)
                    )}}</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Payment Info</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mx-auto" id="checkout">
                    <div class="bg-white">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light mb-3">
                            <li class="nav-item">
                                <a data-toggle="pill" href="#nav-tab-card" class="nav-link active">
                                    <i class="fas fa-credit-card"></i>
                                    Credit Card
                                </a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="pill" href="#nav-tab-paypal" class="nav-link">
                                    <i class="fab fa-paypal"></i>
                                    Paypal
                                </a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="pill" href="#nav-tab-bank" class="nav-link">
                                    <i class="fas fa-university"></i>
                                    Bank Transfer
                                </a>
                            </li>
                        </ul>
                        <!-- End -->
                        <!-- Credit card form content -->
                        <div class="tab-content">
                            <!-- credit card info-->
                            <div id="nav-tab-card" class="tab-pane fade show active">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="username">Card holder name</label>
                                        <input type="text" name="username" placeholder="Jason Doe" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="cardNumber">Card number</label>
                                        <div class="input-group">
                                            <input type="text" name="cardNumber"  maxlength="16" placeholder="Your card number"
                                                   class="form-control" required>
                                            <div class="input-group-append">
                                            <span class="input-group-text text-muted">
                                                <i class="fab fa-cc-visa mx-1"></i>
                                                <i class="fab fa-cc-amex mx-1"></i>
                                                <i class="fab fa-cc-mastercard mx-1"></i>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label><span class="hidden-xs">Expiration</span></label>
                                                <div class="input-group">
                                                    <input type="number" placeholder="MM" name="" class="form-control"
                                                           required>
                                                    <input type="number" placeholder="YY" name="" class="form-control"
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-4">
                                                <label data-toggle="tooltip"
                                                       title="Three-digits code on the back of your card">CVV
                                                    <i class="fa fa-question-circle"></i>
                                                </label>
                                                <input type="text" required class="form-control">
                                            </div>
                                        </div>


                                    </div>
                                    <button type="button"
                                            class="btn btn-primary shadow-sm"> Confirm
                                    </button>
                                </form>
                            </div>
                            <!-- End -->

                            <!-- Paypal info -->
                            <div id="nav-tab-paypal" class="tab-pane fade">
                                <p>Paypal is easiest way to pay online</p>
                                <p>
                                    <button type="button" class="btn btn-primary"><i
                                                class="fab fa-paypal mr-2"></i> Log into my Paypal
                                    </button>
                                </p>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                            <!-- End -->

                            <!-- bank transfer info -->
                            <div id="nav-tab-bank" class="tab-pane fade">
                                <h6>Bank account details</h6>
                                <dl>
                                    <dt>Bank</dt>
                                    <dd> THE WORLD BANK</dd>
                                </dl>
                                <dl>
                                    <dt>Account number</dt>
                                    <dd>7775877975</dd>
                                </dl>
                                <dl>
                                    <dt>IBAN</dt>
                                    <dd>CZ7775877975656</dd>
                                </dl>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                            <!-- End -->
                        </div>
                        <!-- End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
