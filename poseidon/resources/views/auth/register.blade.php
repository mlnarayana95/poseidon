@extends('layouts.frontend.main')
<style>
    /*start Sign-up form Styles Juan Carlos Jimenez*/
    #reg_form {
        border: 1px solid #ddd;
        margin: 100px 0;
        box-shadow: 5px 10px 10px #ddd;
    }

    #reg_form .col-md-7 {
        background-image: url("{{ URL::to('/') }}/images/register.jpg");
        background-size: cover;
        background-position: right;
    }

    #reg_form .col-md-5 {
        padding: 40px 20px;
    }

    #reg_form label {
        font-size: 16px;
        color: #0e2b56;
    }

    #reg_form .form-control {
        background: none;
        border: none;
        outline: none;
        border-bottom: 1px solid #ddd;
        padding: 0;
        font-size: 16px;
    }

    #reg_form .btn-primary {
        background-color: #0e2b56;
        border: none;
        width: 160px;
    }

    h1 {
        margin-top: 100px;
        color: #0e2b56;
        font-size: 35px;
    }

    p {
        color: #000000;
        font-size: 15px;
    }

    h3 {
        text-align: center;
        padding-top: 20px;
        font-size: 30px;
        color: #F68500;
        width: 100%;
    }

    #reg_form .cnf {
        margin: 0;
        padding: 0;
    }

    /*end Sign-up form Styles Juan Carlos Jimenez*/
</style>
@section('content')
    <div class="container">
        <div class="row" id="reg_form">
            <div class="col-md-7">
            </div>
            <div class="col-md-5">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <?php ;?>
                    <h3>Sign Up</h3>
                    <br>
                    <div class="form-group">
                        <label for="first_name">First Name</label><label for="first_name" class="text-danger"> *</label>
                        <input type="text" class="form-control" placeholder="First Name" id="first_name"
                               name="first_name" value="{{ old('first_name') }}">
                        @if($errors->has('first_name'))
                            {!! $errors->first('first_name', '<label class="control-label text-danger"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label><label for="last_name" class="text-danger"> *</label>
                        <input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name"
                               value="{{ old('last_name') }}">
                        @if($errors->has('last_name'))
                            {!! $errors->first('last_name', '<label class="control-label text-danger"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="birthdate">Birth Date</label><label for="birthdate" class="text-danger"> *</label>
                        <input type="date" class="form-control" placeholder="Birth Date" id="birthdate"
                               name="birthdate" value="{{ old('birthdate') }}">
                        @if($errors->has('birthdate'))
                            {!! $errors->first('birthdate', '<label class="control-label text-danger"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Gender</label><label class="text-danger">*</label>
                        <div class="form-check">
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
                        <div class="form-group">
                            <label for="address">Address</label><label for="address" class="text-danger"> *</label>
                            <input type="text" class="form-control" placeholder="Address" id="address" name="address"
                                   value="{{ old('address') }}">
                            @if($errors->has('address'))
                                {!! $errors->first('address', '<label class="control-label text-danger"
                                                                       for="inputError">:message</label>') !!}
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="postal_code">Postal Code</label><label for="postal_code" class="text-danger">
                                *</label>
                            <input type="text" class="form-control" placeholder="Postal Code" id="postal_code"
                                   name="postal_code" value="{{ old('postal_code') }}">
                            @if($errors->has('postal_code'))
                                {!! $errors->first('postal_code', '<label class="control-label text-danger"
                                                                       for="inputError">:message</label>') !!}
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label><label for="phone" class="text-danger"> *</label>
                            <input type="text" class="form-control" placeholder="Phone Number" id="phone"
                                   name="phone_number"
                                   value="{{ old('phone_number') }}">
                            @if($errors->has('phone_number'))
                                {!! $errors->first('phone_number', '<label class="control-label text-danger"
                                                                       for="inputError">:message</label>') !!}
                            @endif
                        </div>
                    </div>
                    <br>
                    <h3>Access Information</h3>
                    <div class="form-group">
                        <label for="email">Email</label><label for="email" class="text-danger"> *</label>
                        <input type="text" class="form-control" placeholder="email address" id="email" name="email"
                               value="{{ old('email') }}">
                        @if($errors->has('email'))
                            {!! $errors->first('email', '<label class="control-label text-danger"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label><label for="password" class="text-danger"> *</label>
                        <input type="password" class="form-control" placeholder="Password" id="password"
                               name="password" value="{{ old('password') }}">
                        @if($errors->has('password'))
                            {!! $errors->first('password', '<label class="control-label text-danger"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="cnf_password">Confirm Password</label><label for="cnf_password" class="text-danger">
                            *</label>
                        <input type="password" class="form-control" placeholder="Confirm Password" id="cnf_password"
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
