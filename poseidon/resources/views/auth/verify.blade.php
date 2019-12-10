@extends('layouts.frontend.main')
<style>
    /*start Sign-up form Styles Juan Carlos Jimenez*/
    #reg_form {
        border: 1px solid #ddd;
        margin: 100px 0;
        box-shadow: 5px 10px 10px #ddd;
    }

    #reg_form .col-md-7 {
        background-image: url("{{ URL::to('/') }}/images/warning.jpg");
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
        <div class="row justify-content-center" id="reg_form">
            <div class="col-md-7">
            </div>
            <div class="col-md-5">
                <h3>{{ __('Verify Your Email Address') }}</h3>
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    <p>{{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},</p>
                    @csrf
                    <button type="submit"
                            class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
                    .
                </form>


            </div>
        </div>
    </div>
@endsection
