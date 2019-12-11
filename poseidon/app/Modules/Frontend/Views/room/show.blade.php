@extends('layouts.frontend.main')
@section('title', 'Poseidon | ' . $room->type->type . ' ' . $room->hotel->name)

@section('breadcrumb')
    @parent
    <li><a href="/room">Rooms</a></li>
@stop

@section('style')
    #myCarousel .list-inline {
    white-space:nowrap;
    overflow-x:auto;
    }

    #myCarousel .carousel-indicators {
    position: static;
    left: initial;
    width: initial;
    margin-left: initial;
    }

    #myCarousel .carousel-indicators > li {
    width: initial;
    height: initial;
    text-indent: initial;
    }

    #myCarousel .carousel-indicators > li.active img {
    opacity: 1;
    }

    #myCarousel .carousel-inner{
    max-height: 475px;
    }

    section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
    }

    #tabs{
    color: #000;
    }

    #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #161527;
    background-color: transparent;
    border-color: transparent transparent #f3f3f3;
    border-bottom: 4px solid !important;
    font-size: 20px;
    font-weight: bold;
    }

    #tabs .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    color: #161527;
    font-size: 20px;
    }

    .tab-icons.fas{
    color: #161527;
    }

    #tabs span{
    color: #000;
    }

    #nav-tab{
    margin-bottom: 30px;
    }
    #tabs .check-in-out, .hotel-location{
    padding: 10px 0;
    }

    #tabs .hotel-description{
    letter-spacing: .3px;
    padding: 20px 0;
    }

    #tabs .hotel-phone{
    margin-bottom: 40px;
    }

    #tabs .tab-container{
    margin-top: 40px;
    margin-bottom: 40px;
    }

    .looped-info{
    margin-bottom: 10px;
    }

    #hotel-page .looped-icon.fa{
    padding-right: 10px;
    }

    .carousel-inner img{
    width: 100%;
    }

    body{
    overflow-x: hidden;
    }


@endsection

@section('content')

    <div id='hotel-page'>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hotel-name mb-3">
                    <h1 class="title text-left mb-0">{{ $room->type->type }}
                        <small>{{ $room->hotel->name }}
                            #{{ $room->room_number }}</small>
                    </h1>
                    <i class="fa fa-map-marker"></i> {{ $room->hotel->address }}
                    </div>
                    <div id="slider">
                        <div id="myCarousel" class="carousel slide shadow">
                            <!-- main slider carousel items -->
                            <div class="carousel-inner"><?php //dd($room->images->toArray()) ?>
                                @foreach($room->images as $key => $image)
                                    <div class="{{$key == 0 ?'active' : ''}} carousel-item"
                                         data-slide-number="{{ $key }}">
                                        <img src="/images/rooms/{{$image->file_name}}"
                                             class="img-fluid"
                                             alt="{{$room->name}}"/>
                                    </div>
                                @endforeach
                                <a class="carousel-control-prev"
                                   href="#myCarousel"
                                   role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"
                                  aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next"
                                   href="#myCarousel"
                                   role="button" data-slide="next">
                            <span class="carousel-control-next-icon"
                                  aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>
                            <!-- main slider carousel nav controls -->

                            <ul class="carousel-indicators list-inline mx-auto border px-2">
                                @foreach($room->images as $key => $image)
                                    <li class="list-inline-item {{$key == 0 ? 'active' : ''}}">
                                        <a id="carousel-selector-{{$key}}"
                                           class="{{$key == 0 ? 'selected' : ''}}"
                                           data-slide-to="{{$key}}"
                                           data-target="#myCarousel">
                                            <img src="/images/rooms/{{$image->file_name}}"
                                                 class=""
                                                 alt="{{$room->name}}"
                                                 width="80" height="60"/>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--/main slider carousel-->
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">


                    <section id="tabs">
                        <div class="container tab-container">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <nav>
                                        <div class="nav nav-tabs nav-fill" id="nav-tab"
                                             role="tablist">
                                            <a class="nav-item nav-link active"
                                               id="nav-home-tab" data-toggle="tab"
                                               href="#nav-home" role="tab"
                                               aria-controls="nav-home"
                                               aria-selected="true"><i
                                                        class="fas fa-hotel fa-sm tab-icons"></i>Overview</a>
                                            <a class="nav-item nav-link"
                                               id="nav-profile-tab" data-toggle="tab"
                                               href="#nav-profile" role="tab"
                                               aria-controls="nav-profile"
                                               aria-selected="false"><i
                                                        class="far fa-check-square fa-sm tab-icons"></i>
                                                Amenities & Features</a>
                                            <a class="nav-item nav-link"
                                               id="nav-contact-tab" data-toggle="tab"
                                               href="#nav-contact" role="tab"
                                               aria-controls="nav-contact"
                                               aria-selected="false"><i
                                                        class="fas fa-search fa-sm tab-icons"></i>Details</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content py-3 px-3 px-sm-0"
                                         id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home"
                                             role="tabpanel" aria-labelledby="nav-home-tab">
                                            <div class="hotel-description">{{ $room->description}}</div>
                                            <div class="check-in-out">
                                                <span><strong>Check in - </strong>{{ $room->hotel->checkin_time }}</span>
                                                <br>
                                                <span><strong>Check out - </strong>{{ $room->hotel->checkout_time }}</span>
                                            </div>
                                            <div class="hotel-location">{{ $room->hotel->address}}</div>
                                            <div class="hotel-phone">
                                                <span><em>Phone number: </em>{{ $room->hotel->phone_number }}</span>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile"
                                             role="tabpanel"
                                             aria-labelledby="nav-profile-tab">
                                            <div class="col-md-12">

                                                <div class="title">Hotel Amenities</div>
                                                <div class="hotel-amenities">
                                                    @foreach($room->hotel->amenities as $amenity)
                                                        <div class="looped-info"><i
                                                                    class="fa fa-{{ $amenity->amenity_icon }} looped-icon"></i>{{ $amenity->amenity }}
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <div class="title">Room Features</div>
                                                <div class="hotel-amenities">
                                                    @foreach($room->features as $feature)
                                                        <div class="looped-info"><i
                                                                    class="fa fa-{{ $feature->feature_icon }} looped-icon"></i>{{ $feature->feature }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact"
                                             role="tabpanel"
                                             aria-labelledby="nav-contact-tab">
                                            <div class="hotel-distance">
                                                <span><strong>Distance from Airport: </strong>{{ $room->hotel->airport_distance }} <em>with</em> <strong>Transportation Charge: </strong>{{ $room->airport_transportation }}</span>
                                            </div>
                                            <div class="check-in-out">
                                                <span><strong>is pet friendly? </strong>{{ $room->hotel->pet_friendly ? 'yes' : 'no' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4">

                    <div class="card mt-4 mb-4">
                        <div class="card-header bg-orange">Booking Details</div>
                        <img class="card-img" src="/images/rooms/{{ $room->images->first()->file_name }}" alt="Vans">
                        <div class="card-img-overlay d-flex justify-content-end">
                            <a href="#" class="card-link text-danger like">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                            <p class="card-text">...</p>
                            <div class="options d-flex flex-fill">
                                <select class="custom-select mr-1">
                                    <option selected>Color</option>
                                    <option value="1">Green</option>
                                    <option value="2">Blue</option>
                                    <option value="3">Red</option>
                                </select>
                                <select class="custom-select ml-1">
                                    <option selected>Size</option>
                                    <option value="1">41</option>
                                    <option value="2">42</option>
                                    <option value="3">43</option>
                                </select>
                            </div>
                            <div class="buy d-flex justify-content-between align-items-center">
                                <div class="price text-success"><h5 class="mt-4">$125</h5></div>
                                <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- hotel-page div -->

@endsection