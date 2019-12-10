@extends('layouts.frontend.main')
<style>
    #reset_form {
        border: 1px solid #ddd;
        margin: 100px 0;
        box-shadow: 5px 10px 10px #ddd;
    }

    #reset_form .col-md-5 {
        background-image: url("{{ URL::to('/') }}/images/recover.jpg");
        background-size: cover;
        background-position: right;
    }

    #reset_form .col-md-7 {
        padding: 40px 20px;
    }

    #reset_form label {
        font-size: 16px;
        color: #0e2b56;
    }

    #reset_form .form-control {
        background: none;
        border: none;
        outline: none;
        border-bottom: 1px solid #ddd;
        padding: 0;
        font-size: 16px;
    }

    #reset_form .btn-primary {
        background-color: #0e2b56;
        border: none;
        width: 160px;
    }

    h3 {
        text-align: center;
        padding-top: 20px;
        font-size: 30px;
        color: #F68500;
        width: 100%;
    }

</style>
@section('content')

    <div class="container">
        <div class="row justify-content-center" id="reset_form">
            <div class="col-md-5">
            </div>
            <div class="col-md-7">
                <h3>Reset Password</h3>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
