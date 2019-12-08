@extends('layouts.frontend.main')
<style>
    /*start Booking style*/
    #info_head {
        background-color: #eeeeee;
        padding: 20px;
        box-shadow: 0px 6px 5px 0px rgba(201,197,201,1);
    }

    #det_header .col-md {
        padding-right: 20px;
        margin-right: 5px;
    }

    #det_header .col-md h4 {
        font-size: 15px;
    }

    #det_header .col-md h3{
        font-size: 18px;
        color: #0e2b56;
    }
    #det_header label{
        font-size: 10px;
    }
    #det_header .btn{
        border-radius: 0;
        padding: 15px;
        font-size: 15px;
    }
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
                        <?=number_format((double)$room->room_cost * (double)$other_info['no_nights']);?>
                    </h3>
                </div>
                <div class="col-md text-right">
                    <a class="btn btn-dark" href="#">Continue</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" id="reg_form">
            <div class="col-md-7">
            </div>
            <div class="col-md-5">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h3>Sign Up</h3>
                    <br>
                    <div class="form-group">
                        <label for="first_name">First Name</label><label for="first_name" class="text-danger"> *</label>
                        <input type="text" class="form-control @if($errors->has('first_name'))is-invalid @endif"
                               placeholder="First Name" id="first_name"
                               name="first_name" value="{{ old('first_name') }}">
                        @if($errors->has('first_name'))
                            {!! $errors->first('first_name', '<label class="control-label text-danger"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label><label for="last_name" class="text-danger"> *</label>
                        <input type="text" class="form-control @if($errors->has('last_name')) is-invalid @endif"
                               placeholder="Last Name" id="last_name" name="last_name"
                               value="{{ old('last_name') }}">
                        @if($errors->has('last_name'))
                            {!! $errors->first('last_name', '<label class="control-label text-danger"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="birthdate">Birth Date</label><label for="birthdate" class="text-danger"> *</label>
                        <input type="date" class="form-control @if($errors->has('birthdate')) is-invalid @endif"
                               placeholder="Birth Date" id="birthdate"
                               name="birthdate" value="{{ old('birthdate') }}">
                        @if($errors->has('birthdate'))
                            {!! $errors->first('birthdate', '<label class="control-label text-danger"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Gender</label><label class="text-danger">*</label>
                        <div class="form-check @if($errors->has('gender')) is-invalid @endif">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" checked="checked"
                                       value="F">Female
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" value="M">Male
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" value="N">Prefer
                                not to say
                            </label>
                        </div>
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label><label for="address" class="text-danger"> *</label>
                        <input type="text" class="form-control @if($errors->has('address')) is-invalid @endif"
                               placeholder="Address" id="address" name="address"
                               value="{{ old('address') }}">
                        @if($errors->has('address'))
                            {!! $errors->first('address', '<label class="control-label text-danger"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Postal Code</label><label for="postal_code" class="text-danger">
                            *</label>
                        <input type="text" class="form-control @if($errors->has('postal_code')) is-invalid @endif"
                               placeholder="Postal Code" id="postal_code"
                               name="postal_code" value="{{ old('postal_code') }}">
                        @if($errors->has('postal_code'))
                            {!! $errors->first('postal_code', '<label class="control-label text-danger"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label><label for="phone" class="text-danger"> *</label>
                        <input type="text" class="form-control @if($errors->has('phone_number')) is-invalid @endif"
                               placeholder="Phone Number" id="phone"
                               name="phone_number"
                               value="{{ old('phone_number') }}">
                        @if($errors->has('phone_number'))
                            {!! $errors->first('phone_number', '<label class="control-label text-danger"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                    <br>
                    <h3>Access Information</h3>
                    <div class="form-group">
                        <label for="email">Email</label><label for="email" class="text-danger"> *</label>
                        <input type="text" class="form-control @if($errors->has('email')) is-invalid @endif"
                               placeholder="email address" id="email" name="email"
                               value="{{ old('email') }}">
                        @if($errors->has('email'))
                            {!! $errors->first('email', '<label class="control-label text-danger"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label><label for="password" class="text-danger"> *</label>
                        <input type="password" class="form-control @if($errors->has('password')) is-invalid @endif"
                               placeholder="Password" id="password"
                               name="password" value="{{ old('password') }}">
                        @if($errors->has('password'))
                            {!! $errors->first('password', '<label class="control-label text-danger"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="cnf_password">Confirm Password</label><label for="cnf_password" class="text-danger">
                            *</label>
                        <input type="password" class="form-control @if($errors->has('cnf_password')) is-invalid @endif"
                               placeholder="Confirm Password" id="cnf_password"
                               name="cnf_password" value="{{ old('cnf_password') }}">
                        @if($errors->has('cnf_password'))
                            {!! $errors->first('cnf_password', '<label class="control-label text-danger"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </form>
                <br>
            </div>
        </div>
    </div>
@endsection
