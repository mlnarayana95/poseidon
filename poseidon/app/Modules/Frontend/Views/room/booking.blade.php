@extends('layouts.frontend.main')

@section('title', 'Book Room')

@section('heading', 'Experience the Best')

@section('breadcrumb')
    @parent
    <li>Booking</li>
@stop

@section('style')
    /*start Booking style*/
    #info_head {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 6px 5px 0 rgba(201, 197, 201, 1);
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

    #content .col-md-5 {
    /*box-shadow: 7px 7px 5px 0px rgba(166, 166, 166, 1);*/
    background-color: #fff;
    border-bottom: 1px solid #e2e2e2;
    }

    #content .container .col-md-5 h2 {
    font-size: 22px;
    font-weight: bold;
    padding: 20px 0 0 0;
    }

    #content .container .col-md-5 .subtitle {
    text-decoration: none;
    text-transform: uppercase;
    font-weight: bold;
    color: #f68500;
    font-size: 15px;
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

    #content .value {
    color: #333;
    font-size: 1.2em
    }

    #content .col-md-12 a.dark {
    border-radius: 0;
    padding: 10px;
    margin: 10px;
    background-color: #0f264b;
    color: #fff;
    }

    @media only screen and (max-width: 468px) {

    }

    #checkout ul.nav li:first-child {
    border-right: none;
    }
    /*end content styles*/
@endsection

@section('content')
    <div id="info_head">
        <div class="container">
            <div class="row" id="det_header">
                <div class="col-md">
                    <h4>Stay Dates</h4>
                    <h3 class="text-left">
                        {{ str_replace("-", "/",
                            $other_info['checkin_date']) . ' - ' . str_replace("-",
                            "/",
                            $other_info['checkout_date'])}}
                    </h3>
                </div>
                <div class="col-md">
                    <h4>Total for Stay</h4>
                    <h3 class="text-left">
                        {{ format_price($cost['total_cost']) }}
                        <span class="text-muted text-sm">(All Tax Inclusive)</span>
                    </h3>
                </div>
                <div class="col-md text-right">
                    <a class="btn btn-dark dark" href="#details">Continue</a>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">

            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    Provided Credit Card Information was not valid. Please Try
                    Again.
                </div>
            @endif

            @include('flash::message')

            <div class="row">
                <h1>Review Reservation Details</h1>
            </div>
            <div class="row">
                <div class="col-md-7 no-padding">
                    <img src="/images/rooms/{{$room->featuredImage->first()->file_name}}"
                         alt="{{ $room->type->type }}" class="img-fit"/>
                </div>

                <div class="col-md-5">
                    <h2 class="text-left">Guest room, {{$room->type->type}}</h2>
                    <div class="subtitle">Room details</div>
                    <hr/>

                    <div class="mb-2"><span class="det_type"><i
                                    class="fa fa-key"></i> Room Number: </span>{{$room->room_number}}
                    </div>
                    <div class="mb-2"><span class="det_type"><i
                                    class="fa fa-hotel"></i> Hotel: </span>{{$room->hotel->name}}
                    </div>

                    <div class="det_type">Description:</div>
                    <p>{{$room->description}}</p>

                    <div class="mb-2"><span class="det_type"><i
                                    class="fa fa-male"></i><i
                                    class="fa fa-female"></i> Adults Capacity: </span>{{$room->max_adults}}
                    </div>
                    <div class="mb-2"><span class="det_type"><i
                                    class="fa fa-child"></i> Children Capacity: </span>{{$room->max_children}}
                    </div>
                    <div class="mb-2"><span class="det_type"><i
                                    class="fa fa-shower"></i> No. Bathrooms: </span>{{$room->no_bathrooms}}
                    </div>

                    <div class="mb-2">
                        <span class="det_type"><i class="fa fa-smoking"></i> Smoking: </span>
                        @if( $room->smoking == 1) Yes @else
                            No @endif
                    </div>

                    <div class="mb-2">
                        <span class="det_type">
                            <i class="fa fa-dollar"></i>
                            Cost per night:
                        </span>
                        <span class="price">{{ format_price($room->room_cost) }}</span>
                        per night
                    </div>
                </div>

            </div>
            <div class="row" id="details">
                <div class="col-md-12">
                    <h1>Rate Details</h1>

                    <dl class="row">
                        <dt class="col-6">
                            <span class="value border-bottom">1</span> Room for
                            <span class="value border-bottom">{{$other_info['no_nights']}}</span>
                            nights
                        </dt>
                        <dd class="col-6 text-right value"><strong>Price in
                                CAD</strong></dd>

                        <dt class="col-6">Price:</dt>
                        <dd class="col-6 text-right">{{ format_price($room->room_cost) }}</dd>

                        <dt class="col-6">GST Tax:</dt>
                        <dd class="col-6 text-right">{{ format_price($cost['total_gst']) }}</dd>

                        <dt class="col-6 border-bottom">PST Tax:</dt>
                        <dd class="col-6 border-bottom text-right">{{ format_price($cost['total_pst']) }}</dd>

                        <dt class="col-6 value">Total for Stay:</dt>
                        <dd class="col-6 text-right value">
                            {{ format_price($cost['total_cost'])}}
                        </dd>
                    </dl>

                </div>
            </div>

            @guest
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="bg-info text-white card-header">Login or Register</div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">
                                    Please <a href="/login?ref=booking">Login</a> or <a
                                            href="/register">Register</a> to continue.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                {!! Form::open(['method' => 'post']) !!}
                <div class="row">
                    <div class="col-md-12">
                        <h1><span class="badge badge-info">1</span> Personal
                            Details</h1>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group @if($errors->has('username')) {{'has-error'}} @endif">
                                    <label for="username">Card holder
                                        name</label>
                                    {!!Form::text('username', null, array('class' => 'form-control', 'id'=>'username', 'placeholder' => 'Jon Doe'))!!}
                                    @if($errors->has('username'))
                                        {!! $errors->first('username', '<label class="control-label error-message"
                                                                               for="inputError">:message</label>') !!}
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group @if($errors->has('username')) {{'has-error'}} @endif">
                                    <label for="username">Card holder
                                        name</label>
                                    {!!Form::text('username', null, array('class' => 'form-control', 'id'=>'username', 'placeholder' => 'Jon Doe'))!!}
                                    @if($errors->has('username'))
                                        {!! $errors->first('username', '<label class="control-label error-message"
                                                                               for="inputError">:message</label>') !!}
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h1><span class="badge badge-info">2</span> Payment Info
                        </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mx-auto pb-3" id="checkout">
                        @if(Session::get('cc_error') && $errors->any())
                            Please correct the following errors and try again.
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        @endif
                        <div class="btn btn-dark mb-3">
                            <i class="fas fa-credit-card"></i>
                            Credit Card
                        </div>

                        <div class="form-group @if($errors->has('username')) {{'has-error'}} @endif">
                            <label for="username">Card holder name</label>
                            {!!Form::text('username', null, array('class' => 'form-control', 'id'=>'username', 'placeholder' => 'Jon Doe'))!!}
                            @if($errors->has('username'))
                                {!! $errors->first('username', '<label class="control-label error-message"
                                                                       for="inputError">:message</label>') !!}
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('cardNumber')) {{'has-error'}} @endif">
                            <label for="cardNumber">Card Number</label>
                            <div class="input-group">
                                {!!Form::text('cardNumber', null, array('class' => 'form-control', 'id'=>'cardNumber', 'maxlength'=>16, 'placeholder'=>'Your Card Number'))!!}
                                <div class="input-group-append">
                                            <span class="input-group-text text-muted">
                                                <i class="fab fa-cc-visa mx-1"></i>
                                                <i class="fab fa-cc-amex mx-1"></i>
                                                <i class="fab fa-cc-mastercard mx-1"></i>
                                            </span>
                                </div>
                            </div>
                            @if($errors->has('cardNumber'))
                                {!! $errors->first('cardNumber', '<label class="control-label error-message"
                                                                       for="inputError">:message</label>') !!}
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group @if($errors->has('month') || $errors->has('year')) {{'has-error'}} @endif">
                                    <div>
                                        <label for="month">Expiration</label>
                                    </div>
                                    <div class="input-group">
                                        {!!Form::number('month', null, array('class' => 'form-control', 'id'=>'month', 'maxlength'=>2, 'placeholder'=>'MM'))!!}
                                        {!!Form::number('year', null, array('class' => 'form-control', 'id'=>'year', 'maxlength'=>2, 'placeholder'=>'YY'))!!}
                                    </div>
                                    @if($errors->has('month'))
                                        {!! $errors->first('month', '<label class="control-label error-message"
                                                                               for="inputError">:message</label>') !!}
                                    @endif
                                    @if($errors->has('year'))
                                        {!! $errors->first('year', '<label class="control-label error-message"
                                                                               for="inputError">:message</label>') !!}
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group @if($errors->has('cvv')) {{'has-error'}} @endif">
                                    <label for="cvv" data-toggle="tooltip"
                                           title="Three-digits code on the back of your card">
                                        CVV
                                        <i class="fa fa-question-circle"></i>
                                    </label>
                                    {!!Form::text('cvv', null, array('class' => 'form-control', 'id'=>'cvv', 'maxlength'=>3))!!}
                                    @if($errors->has('cvv'))
                                        {!! $errors->first('cvv', '<label class="control-label error-message"
                                                                               for="inputError">:message</label>') !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                                class="btn btn-main pull-right"> Confirm
                        </button>
                    </div>
                </div>

                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endsection
