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
                <form method="POST" action="#">
                    @csrf
                    <h3>Profile</h3>
                    <br>
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name"
                               value="{{ $person->first_name }}">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name"
                               value="{{ $person->last_name}}">
                    </div>
                    <div class="form-group">
                        <label for="birthdate">Birth Date</label>
                        <input type="date" class="form-control" placeholder="Birth Date" id="birthdate" name="birthdate"
                               value="{{ $person->birthdate }}">
                    </div>
                    <div class="form-group">
                        <label for="gender">gender</label>
                        <input type="text" class="form-control" placeholder="gender" id="gender" name="gender"
                               value="{{ $person->gender }}">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" placeholder="Address" id="address" name="address"
                               value="{{ $person->address }}">
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Postal Code</label>
                        <input type="text" class="form-control" placeholder="Postal Code" id="postal_code" name="postal_code"
                               value="{{ $person->postal_code }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" placeholder="Phone Number" id="phone" name="phone_number"
                               value="{{ $person->phone_number }}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Edit Profile') }}
                    </button>
                </form>
                <br>
            </div>
        </div>
    </div>
@endsection
