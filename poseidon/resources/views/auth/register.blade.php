@extends('layouts.frontend.main')

@section('content')

    <div class="container">
        @if($errors->has())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
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
                        <label for="first_name">First Name</label><label for="first_name" class="cnf"> *</label>
                        <input type="text" class="form-control" placeholder="First Name" id="first_name"
                               name="first_name">
                        @endif
                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label><label for="last_name" class="cnf"> *</label>
                        <input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name">
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="birth_date">Birth Date</label><label for="birth_date" class="cnf"> *</label>
                        <input type="date" class="form-control" placeholder="Birth Date" id="birth_date"
                               name="birth_date">
                        @error('birth_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Gender</label><label class="cnf">*</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="female">Female
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="male">Male
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="reserved">Prefer not to say
                            </label>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="address">Address</label><label for="address" class="cnf"> *</label>
                            <input type="text" class="form-control" placeholder="Address" id="address" name="address">
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="zipcode">Postal Code</label><label for="zipcode" class="cnf"> *</label>
                            <input type="text" class="form-control" placeholder="Postal Code" id="zipcode"
                                   name="zipcode">
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label><label for="phone" class="cnf"> *</label>
                            <input type="text" class="form-control" placeholder="Phone Number" id="phone" name="phone">
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                    </div>
                    <br>
                    <h3>Access Information</h3>
                    <div class="form-group">
                        <label for="email">Email</label><label for="email" class="cnf"> *</label>
                        <input type="text" class="form-control" placeholder="Phone Number" id="email" name="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label><label for="password" class="cnf"> *</label>
                        <input type="password" class="form-control" placeholder="Password" id="password"
                               name="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cnf_password">Confirm Password</label><label for="cnf_password" class="cnf">
                            *</label>
                        <input type="password" class="form-control" placeholder="Phone Number" id="cnf_password"
                            name="cnf_password">
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                        @error('cnf_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong></span>
                        @enderror
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
