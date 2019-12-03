@extends('layouts.frontend.home')
@section('title', 'Home')

@section('content')

    <div class="social-head">
        <div class="container">
            <div class="navs">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <img src="images/fbook.png" alt="fbook">
                    </li>
                    <li class="nav-item">
                        <img src="images/twitter.png" alt="twitter">
                    </li>
                    <li class="nav-item">
                        <img src="images/insta.png" alt="insta">
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="nav-background">
        <!-- navbar in banner -->
        <nav class="navbar home-navbar navbar-expand-lg navbar-light bg-light">

            <div class="collapse navbar-collapse"
                 id="navbarSupportedContent">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" alt="logo">
                </a>
                <ul class="navbar-nav home-navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span
                                    class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav> <!-- end of navbar -->

        <div id="carouselExampleControls" class="carousel slide"
             data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banner.jpg" class="d-block w-100"
                         alt="banner">
                </div>
                <div class="carousel-item">
                    <img src="images/banner2.jpg" class="d-block w-100"
                         alt="banner">
                </div>
                <div class="carousel-item">
                    <img src="images/banner3.jpg" class="d-block w-100"
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

            <form>
                <div class="form-row">
                    <div class="col-md-1">

                    </div>
                    <div class="form-group col-md-2">
                        <label for="checkin">Check In</label>
                        <input type="date" class="form-control"
                               id="checkin">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="checkout">Check Out</label>
                        <input type="date" class="form-control"
                               id="checkout">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="adults">Adults</label>
                        <input type="number" class="form-control"
                               id="adults" placeholder="">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="children">Children</label>
                        <input type="number" class="form-control"
                               id="children" placeholder="">
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
            <h2>Why Choose Us?</h2>
            <div class="row why-choose-us">

                <div class="col-md-3 text-center why-choose-us">
                    <i class="fas fa-globe-americas fa-2x choose-us-icon"></i>
                    <h6>World Class Service</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod</p>
                </div>
                <div class="col-md-3 text-center why-choose-us-dollar">
                    <i class="fas fa-dollar-sign fa-2x choose-us-icon"></i>
                    <h6>Best Price Guaranteed</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod</p>
                </div>
                <div class="col-md-3 text-center why-choose-us">
                    <i class="fas fa-glass-cheers fa-2x choose-us-icon"></i>
                    <h6>Exotic Ambience</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod</p>
                </div>
                <div class="col-md-3 text-center why-choose-us">
                    <i class="fas fa-thumbs-up fa-2x choose-us-icon"></i>
                    <h6>Great Reviews</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod</p>
                </div>
            </div>
        </div>
    </div>


    <div class="bc-gray">
        <div class="container home-rooms">
            <h2>Our Hotel Rooms</h2>
            <div class="row">

                <div class="col-md-4 col-sm-12 text-center">
                    <div class="home-room shadow">
                        <img src="images/room1.jpg" alt="room1">
                        <div class="row home-room-info">
                            <div class="col-md-8">
                                <h4>Family Room</h4>Place Cuba
                            </div>
                            <div class="col-md-4 text-right"><span
                                        class="price">$420</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12  text-center">
                    <div class="home-room shadow">
                        <img src="images/room2.jpg" alt="room2">
                        <div class="row home-room-info">
                            <div class="col-md-8">
                                <h4>Deluxe Room</h4>Place Mexico
                            </div>
                            <div class="col-md-4 text-right"><span
                                        class="price">$610</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12  text-center">
                    <div class="home-room shadow">
                        <img src="images/room3.jpg" alt="room3">
                        <div class="row home-room-info">
                            <div class="col-md-8">
                                <h4>Family Room</h4>Place Maldives
                            </div>
                            <div class="col-md-4 text-right"><span
                                        class="price">$530</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container">
            <h2>Our Top Destinations</h2>
            <div class="row">

                <div class="col-md-4 col-sm-12 top-destination">
                    <img class="img-fluid" src="images/top1.png"
                         alt="top 1">
                    <div class="destination">
                        <h4>Cuba</h4>
                        <button>Explore</button>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 top-destination">
                    <img class="img-fluid" src="images/top3.png"
                         alt="top 3">
                    <div class="destination">
                        <h4>Maldives</h4>
                        <button>Explore</button>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 top-destination">
                    <img class="img-fluid" src="images/top2.png"
                         alt="top 2">
                    <div class="destination">
                        <h4>Mexico</h4>
                        <button>Explore</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="bc-gray">
        <div class="container">
            <div class="row stats pb-4">
                <div class="col-md-3 text-center">
                    <h4>35472</h4>
                    <span>HAPPY CUSTOMERS</span>
                </div>
                <div class="col-md-3 text-center">
                    <h4>6</h4>
                    <span>AMAZING DESTINATIONS</span>
                </div>
                <div class="col-md-3 text-center">
                    <h4>404</h4>
                    <span>ROOMS AVAILABLE</span>
                </div>
                <div class="col-md-3 text-center">
                    <h4>4.5</h4>
                    <span>CUSTOMER RATINGS</span>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex align-content-center flex-wrap justify-content-center contact-us-image">
        <div class="contact text-center">
            <h3 class="pb-4">Start Your Adventure With Us</h3>
            <button>Contact Us</button>
        </div>
    </div>

@endsection