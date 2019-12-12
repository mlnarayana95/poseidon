@extends('layouts.frontend.home')
@section('title', 'Home')

@section('content')

    <div class="social-head">
        <div class="container">
            <div class="navs">
                <ul class="nav justify-content-end">
                    @guest()
                        <li class="nav-item">
                            <a class="nav-link active" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active"
                               href="/profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/profile/bookings">Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                            <form id="logout-form"
                                  action="{{ route('logout') }}" method="POST"
                                  style="display: none;">{{ csrf_field() }}</form>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="" target="_blank"
                           href="{{ setting('facebook') }}">
                            <img src="/images/fbook.png" alt="fbook">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" target="_blank"
                           href="{{ setting('twitter') }}">
                            <img src="/images/twitter.png" alt="twitter">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" target="_blank"
                           href="{{ setting('instagram') }}">
                            <img src="/images/insta.png" alt="insta">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="nav-background">
        <!-- navbar in banner -->
        <nav class="navbar home-navbar navbar-expand-md navbar-light bg-light">

            <div class="container">
                <a href="/" class="navbar-brand">
                    <img src="/images/logo.png" alt="logo">
                </a>
                <button type="button" class="navbar-toggler"
                        data-toggle="collapse"
                        data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between"
                     id="navbarCollapse">

                    <div class="navbar-nav ml-auto">
                        <a class="nav-link nav-item active" href="/">Home</a>
                        <a class="nav-link nav-item" href="/about">About Us</a>
                        <a class="nav-link nav-item" href="/room">Rooms</a>
                        <a class="nav-link nav-item" href="/hotels">Hotels</a>
                        <a class="nav-link nav-item" href="/contact">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- main navbar ends -->

        <div id="carouselExampleControls" class="carousel slide"
             data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/banner.jpg" class="d-block w-100"
                         alt="banner">
                </div>
                <div class="carousel-item">
                    <img src="/images/banner2.jpg" class="d-block w-100"
                         alt="banner">
                </div>
                <div class="carousel-item">
                    <img src="/images/banner3.jpg" class="d-block w-100"
                         alt="banner">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls"
               role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"
                          aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls"
               role="button" data-slide="next">
                    <span class="carousel-control-next-icon"
                          aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <form method="post" action="/search" id="search-form"
                  autocomplete="off">
                @csrf
                <div class="form-row no-margin">
                    <div class="col-md-1">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="checkin">Check In *</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control datepicker"
                                   id="checkin" name="checkin">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="checkout">Check Out *</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control datepicker"
                                   id="checkout" name="checkout">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="adults">Adults</label>
                        <input type="number" class="form-control"
                               id="adults" name="adults" placeholder="">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="children">Children</label>
                        <input type="number" class="form-control"
                               id="children" name="children" placeholder="">
                    </div>
                    <div class="form-group col-md-2">
                        <label>&nbsp;</label><br>
                        <button id="search" type="submit"
                                class="btn btn-primary">Search
                        </button>
                    </div>
                    <div class="col-md-1">

                    </div>
                </div>
            </form>
        </div>
    </div>

    <div>
        <div class="container">
            <h2 class="header-effect">Why Choose Us?</h2>
            <div class="row why-choose-us">

                <div class="col-md-3 text-center why-choose-us">
                    <i class="fas fa-globe-americas fa-2x choose-us-icon"></i>
                    <h6>World Class Service</h6>
                    <p>We have set the benchmark for responsible tourism based
                        on high-quality initiatives. Located in unique places
                        and serving excellent and honest gastronomy.</p>
                </div>
                <div class="col-md-3 text-center why-choose-us-dollar">
                    <i class="fas fa-dollar-sign fa-2x choose-us-icon"></i>
                    <h6>Best Price Guaranteed</h6>
                    <p>Book now and receive up to $800 in resort credits to
                        enjoy and complement your dream trip!</p>
                </div>
                <div class="col-md-3 text-center why-choose-us">
                    <i class="fas fa-glass-cheers fa-2x choose-us-icon"></i>
                    <h6>Exotic Ambience</h6>
                    <p>
                        Enjoy seafood specialities and signature cocktails
                        featuring passion, colors,
                        high-quality ingredients and one of the most
                        breathtaking views at our first class restaurant:
                        Poseidon del Mar.</p>
                </div>
                <div class="col-md-3 text-center why-choose-us">
                    <i class="fas fa-thumbs-up fa-2x choose-us-icon"></i>
                    <h6>Guest Testimonials</h6>
                    <p>"We had a wonderful holiday organised within budget by
                        people who knew what they were talking about, who could
                        make relevant recommendations for tours and
                        activities."</p>
                </div>
            </div>
        </div>
    </div>


    <div class="bc-gray pb-5">
        <div class="container home-rooms">
            <h2 class="header-effect">Our Hotel Rooms</h2>
            <div class="row">

                @foreach($rooms as $room)
                    <div class="col-md-4 col-sm-1 mb-3">
                        <div class="home-room shadow">
                            <div class="room-img">
                                <img src="/images/rooms/{{ $room->images->first()->file_name }}"
                                     alt="{{ $room->type->type }}"
                                     class="img-fit"/>
                            </div>
                            <div class="row home-room-info">
                                <div class="col-md-8">
                                    <h4>
                                        <a href="/room/{{ $room->id }}"
                                           class="title-link">
                                            {{ $room->type->type }}
                                        </a>
                                    </h4>
                                </div>
                                <div class="col-md-4 text-right"><span
                                            class="price">${{ number_format($room->room_cost) }}</span>
                                </div>
                                <div class="col-md-12">
                                    <i class="fa fa-map-marker"></i> {{ $room->hotel->location->location }}
                                    <br>
                                    <i class="fa fa-building"></i> {{ $room->hotel->name }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div>
        <div class="container">
            <h2 class="header-effect">Our Top Destinations</h2>
            <div class="row">

                <div class="col-md-4 col-sm-12 top-destination">
                    <img class="img-fluid" src="/images/top1.png"
                         alt="top 1">
                    <div class="destination">
                        <h4>Cuba</h4>

                        <button class="home-button"><a
                                    href="/hotels">Explore</a></button>


                    </div>
                </div>

                <div class="col-md-4 col-sm-12 top-destination">
                    <img class="img-fluid" src="/images/top3.png"
                         alt="top 3">
                    <div class="destination">
                        <h4>Maldives</h4>

                        <button class="home-button"><a
                                    href="/hotels">Explore</a></button>

                    </div>
                </div>

                <div class="col-md-4 col-sm-12 top-destination">
                    <img class="img-fluid" src="/images/top2.png"
                         alt="top 2">
                    <div class="destination">
                        <h4>Mexico</h4>

                        <button class="home-button"><a
                                    href="/hotels">Explore</a></button>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="bc-gray pb-3">
        <div class="container">
            <div class="row stats pb-4">
                <div class="col-md-3 text-center">
                    <h4><strong>35472</strong></h4>
                    <span>HAPPY CUSTOMERS</span>
                </div>
                <div class="col-md-3 text-center">
                    <h4><strong>6</strong></h4>
                    <span>AMAZING DESTINATIONS</span>
                </div>
                <div class="col-md-3 text-center">
                    <h4><strong>404</strong></h4>
                    <span>ROOMS AVAILABLE</span>
                </div>
                <div class="col-md-3 text-center">
                    <h4><strong>4.5</strong></h4>
                    <span>CUSTOMER RATINGS</span>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex align-content-center flex-wrap justify-content-center contact-us-image">
        <div class="contact text-center">
            <h3 class="pb-4">Start Your Adventure With Us</h3>
            <button class="home-button"><a class="nav-link nav-item"
                                           href="/contact">Contact Us</a>
            </button>
        </div>
    </div>

@endsection

@section('scripts')
    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script>
        $(function () {
            (function ($) {
                // initialise datepickers
                var opts = {
                    format: 'yyyy-mm-dd',
                    clearBtn: true,
                    autoclose: true,
                    startDate: new Date()
                };
                // first datepicker
                $('#checkin').datepicker(opts);
                // second datepickers allows plain text
                opts.forceParse = false;
                $('#checkout').datepicker(opts);
                // add event listeners to datepickers
                $('#checkin').on('changeDate', function (selected) {
                    // see if the second picker has a date selected
                    var toDate = $('#checkout').datepicker('getDate');
                    if (toDate) {
                        // if it is before the first date, set to the value of the first date
                        if (selected.date.valueOf() > toDate.valueOf()) {
                            $('#checkout').datepicker('setDate', selected.date);
                        }
                    }
                    // sets the start date on the second picker
                    $('#checkout').datepicker('setStartDate', selected.date);
                });
                $('#checkin').on('clearDate', function () {
                    $('#checkout').datepicker('clearDates');
                });
            })(jQuery);
        });

    </script>
@endsection