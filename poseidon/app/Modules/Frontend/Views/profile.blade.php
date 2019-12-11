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
                <h3>Profile</h3>
                <br>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <label class="form-control">{{$person->first_name}}</label>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <label class="form-control">{{ $person->last_name}}</label>
                </div>
                <div class="form-group">
                    <label for="birthdate">Birth Date</label>
                    <label class="form-control">{{ $person->birthdate }}</label>
                </div>
                <div class="form-group">
                    <label for="gender">gender</label>
                    <label class="form-control">
                        @if($person->gender == 'F')
                            Female
                        @elseif($person->gender == 'M')
                            Male
                        @else
                            Prefer not to say
                        @endif
                    </label>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <label class="form-control">{{$person->address}}</label>
                </div>
                <div class="form-group">
                    <label for="postal_code">Postal Code</label>
                    <label class="form-control">{{ $person->postal_code }}</label>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <label class="form-control">{{ $person->phone_number }}</label>
                </div>
                <br>
                <a href="{{ route('update') }}" class="btn btn-primary">Update Profile</a>
                <a href="/profile/bookings" class="btn btn-primary">My Bookings</a>
                <br>
            </div>
        </div>
    </div>
@endsection
