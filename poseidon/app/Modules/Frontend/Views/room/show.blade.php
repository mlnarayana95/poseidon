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
    font-size: 18px;
    font-weight: bold;
    }

    #tabs .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    color: #161527;
    font-size: 18px;
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

    .hor-line {
    width: 1px;
    height: 70px;
    display: block;
    border-right: 1px solid rgba(166,166,166,0.2);
    margin: 0px 24px;
    }

    .pos-rel {
    position: relative;
    }

    .top-triangle::after {
    position: absolute;
    content: '';
    width: 14px;
    height: 14px;
    top: -5px;
    left: 10%;
    background-color: #fff;
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
    box-shadow: 1px -1px 0px 0px rgba(166,166,166,0.2), 0px 0px 0px 0px rgba(166,166,166,0.2);
    z-index: 2;
    }

    .check-dates {
    position: relative;
    background: #fff;
    border: solid 1px rgba(166,166,166,0.2);
    padding: 8px 16px;
    border-radius: 2px;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.25;
    color: #222;
    z-index: 1;
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
                                        <div class="nav nav-tabs nav-fill"
                                             id="nav-tab"
                                             role="tablist">
                                            <a class="nav-item nav-link active"
                                               id="nav-home-tab"
                                               data-toggle="tab"
                                               href="#nav-home" role="tab"
                                               aria-controls="nav-home"
                                               aria-selected="true"><i
                                                        class="fas fa-hotel fa-sm tab-icons"></i>Overview</a>
                                            <a class="nav-item nav-link"
                                               id="nav-profile-tab"
                                               data-toggle="tab"
                                               href="#nav-profile" role="tab"
                                               aria-controls="nav-profile"
                                               aria-selected="false"><i
                                                        class="far fa-check-square fa-sm tab-icons"></i>
                                                Amenities & Features</a>
                                            <a class="nav-item nav-link"
                                               id="nav-contact-tab"
                                               data-toggle="tab"
                                               href="#nav-contact" role="tab"
                                               aria-controls="nav-contact"
                                               aria-selected="false"><i
                                                        class="fas fa-search fa-sm tab-icons"></i>Details</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content py-3 px-3 px-sm-0"
                                         id="nav-tabContent">
                                        <div class="tab-pane fade show active"
                                             id="nav-home"
                                             role="tabpanel"
                                             aria-labelledby="nav-home-tab">
                                            <div class="hotel-description">{{ $room->description}}</div>

                                            <div class="title">
                                                Hotel Overview -
                                                <a href="/hotel/{{ $room->hotel->slug }}">
                                                    {{ $room->hotel->name }}
                                                </a>
                                            </div>
                                            <div class="hotel-description">
                                                {{ $room->hotel->description}}
                                            </div>
                                            <div class="check-in-out">
                                                <div class="d-flex">
                                                    <div>
                                                        <div class="mb-2">
                                                            <strong>Check-in
                                                                Time</strong>
                                                        </div>
                                                        <div class="pos-rel">
                                                            <div class="top-triangle"></div>
                                                            <div class="check-dates">
                                                                {{ format_time($room->hotel->checkin_time) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hor-line"></div>
                                                    <div>
                                                        <div class="mb-2">
                                                            <strong>Check-out
                                                                Time</strong>
                                                        </div>
                                                        <div class="pos-rel">
                                                            <div class="top-triangle"></div>
                                                            <div class="check-dates">
                                                                {{ format_time($room->hotel->checkout_time) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hotel-location">{{ $room->hotel->address}}</div>
                                            <div class="hotel-phone">
                                                <span><em>Phone number: </em>{{ $room->hotel->phone_number }}</span>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade"
                                             id="nav-profile"
                                             role="tabpanel"
                                             aria-labelledby="nav-profile-tab">
                                            <div class="col-md-12">

                                                <div class="title">Hotel
                                                    Amenities
                                                </div>
                                                <div class="hotel-amenities">
                                                    @foreach($room->hotel->amenities as $amenity)
                                                        <div class="looped-info">
                                                            <i
                                                                    class="fa fa-{{ $amenity->amenity_icon }} looped-icon"></i>{{ $amenity->amenity }}
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <div class="title">Room
                                                    Features
                                                </div>
                                                <div class="hotel-amenities">
                                                    @foreach($room->features as $feature)
                                                        <div class="looped-info">
                                                            <i
                                                                    class="fa fa-{{ $feature->feature_icon }} looped-icon"></i>{{ $feature->feature }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade"
                                             id="nav-contact"
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
                        <img class="card-img"
                             src="/images/rooms/{{ $room->images->first()->file_name }}"
                             alt="Vans">
                        <div class="card-body">
                            <h4 class="card-title title">{{ $room->type->type }}
                                <small>#{{ $room->room_number }}</small>
                            </h4>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <i class="fa fa-hotel"></i>
                                {{ $room->hotel->name }}
                            </h6>
                            <p class="card-text">
                                Starting from
                                <span class="text-orange text-big">
                                    {{ format_price($room->room_cost) }}
                                </span>
                                per night <br/>
                                <span class="text-muted text-sm">* Exclusive of all taxes</span>
                            </p>

                            {!! Form::open(['url' => '/booking', 'method' => 'get', 'autocomplete' => 'off', 'id' => 'booking-form']) !!}

                            {{ Form::hidden('room_id', $room->id) }}
                            <div class="form-group mb-3">
                                <div class="options d-flex flex-fill" id="adults">
                                    @php $adult_range = ['' => 'Adults'] + array_combine(range(1, $room->max_adults), range(1, $room->max_adults)); @endphp
                                    {{ Form::select('adults', $adult_range, null, ['class' => "custom-select mr-1"]) }}

                                    @php $children_range = ['' => 'Children'] + range(0, $room->max_children); @endphp
                                    {{ Form::select('children', $children_range, null, ['class' => "custom-select mr-1", 'id' => 'children']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group" id="dates">
                                    {{ Form::text('dates', null, ['class' => "form-control", 'id' => 'picker', 'placeholder' => 'Booking Dates']) }}
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>

                            <div class="buy d-flex justify-content-between align-items-center">
                                <button type="submit"
                                   class="btn btn-block btn-danger mt-3"><i
                                            class="fas fa-book"></i> Proceed To
                                    Booking</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- hotel-page div -->

@endsection

@section('scripts')
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css"/>

    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script>
        function getDates(ranges) {
            var dateArray = [];

            $.each(ranges, function (index, value) {
                var currentDate = moment(value[0]);
                var stopDate = moment(value[1]);
                while (currentDate <= stopDate) {
                    dateArray.push(moment(currentDate).format('YYYY-MM-DD'));
                    currentDate = moment(currentDate).add(1, 'days');
                }
            });

            return dateArray;
        }

        // Define the disabled date array
        var disabledArr = getDates(<?= $booked_dates ?>);//getDates([["12/06/2019", "12/08/2019"], ["12/12/2019", "12/15/2019"]]);

        // Function to draw the calendar accounting the disabled dates.
        $("#picker").daterangepicker({
                autoApply: true,
                minDate: new Date(),
                autoUpdateInput: false,
                locale: {
                    format: 'YYYY-MM-DD',
                    "separator": " to ",
                },
                isInvalidDate: function (arg) {
                    // Prepare the date comparision
                    var thisMonth = arg._d.getMonth() + 1;   // Months are 0 based
                    if (thisMonth < 10) {
                        thisMonth = "0" + thisMonth; // Leading 0
                    }
                    var thisDate = arg._d.getDate();
                    if (thisDate < 10) {
                        thisDate = "0" + thisDate; // Leading 0
                    }
                    var thisYear = arg._d.getYear() + 1900;   // Years are 1900 based

                    var thisCompare = thisYear + "-" + thisMonth + "-" + thisDate;

                    if ($.inArray(thisCompare, disabledArr) != -1) {
                        return true; //arg._pf = {userInvalidated: true};
                    }
                }

            }
            , function (start_date, end_date) {
                this.element.val(start_date.format('YYYY-MM-DD') + ' to ' + end_date.format('YYYY-MM-DD'));
            });


        // Function to disallow a range selection that includes disabled dates.
        $("#picker").on("apply.daterangepicker", function (e, picker) {

            // Get the selected bound dates.
            var startDate = picker.startDate.format('YYYY-MM-DD');
            var endDate = picker.endDate.format('YYYY-MM-DD');

            // Compare the dates again.
            var clearInput = false;
            for (i = 0; i < disabledArr.length; i++) {
                if (startDate < disabledArr[i] && endDate > disabledArr[i]) {
                    clearInput = true;
                }
            }

            // If a disabled date is in between the bounds, clear the range.
            if (clearInput) {

                // To clear selected range (on the calendar).
                var today = new Date();
                $(this).data('daterangepicker').setStartDate(today);
                $(this).data('daterangepicker').setEndDate(today);

                // To clear input field and keep calendar opened.
                $(this).val("").focus();

                // Alert user!
                alert("Your range selection includes disabled dates!");
            }
        });

        // Ajax Form Submit
        $("#booking-form").submit(function(event){
            event.preventDefault(); //prevent default action
            var post_url = $(this).attr("action"); //get form action url
            var request_method = $(this).attr("method"); //get form GET/POST method
            var form_data = $(this).serialize(); //Encode form elements for submission

            // For error messages
            $(this).find('.has-error').removeClass('has-error');
            $(this).find('label.error').remove();
            $(this).find('.callout').remove();

            $.ajax({
                url : post_url,
                type: request_method,
                data : form_data
            }).done(function(response){
                if (response.status == 1) {
                    window.location.replace(this.url);
                } else {
                    $.each(response.errors, function (i, v) {
                        $('#booking-form').find('#' + i).after('<label class="error ">' + v + '</label>').closest('.form-group').addClass('has-error');
                    });
                }

                setTimeout(function () {
                    $('.callout').remove()
                }, 2500);
            });
        });
    </script>
@endsection