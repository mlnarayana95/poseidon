@extends('layouts.frontend.main')
@section('title', 'Room List')

@section('heading', 'Choose Form Our Best Rooms')

@section('breadcrumb')
    @parent
    <li>Rooms</li>
@stop

@section('stylelink')
    <!--Plugin CSS file with desired skin-->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>
@endsection

@section('content')

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="list-section">

                    @foreach($rooms as $room)
                        <div class="room shadow">
                            <div class="room-img">
                                <img src="/images/room1.jpg" alt="Code">
                            </div>
                            <div class="room-info">
                                <div class="room-title">
                                    {{ $room->full_name }}
                                </div>
                                <div class="mb-2">
                                    from <span
                                            class="room-price">${{ $room->room_cost }}</span>
                                    per night
                                </div>

                                <div class="mb-2">
                                    <i class="fa fa-map-marker"></i> {{ $room->address }}
                                    <br/>
                                    <i class="fa fa-hotel"></i> {{ $room->hotel }}
                                </div>

                                <div class="mb-2">
                                    @foreach($room->features->take(5) as $feature)
                                        <i class="fa fa-snowflake"></i> {{ $feature->feature }}
                                    @endforeach
                                </div>

                                <div class="mb-2">
                                    Ut tellus dolor, dapibus eget, elementum
                                    vel, cursus
                                    eleifend, elit. Aenean auctor wisi et
                                    urna...
                                </div>

                                <hr/>

                                <div class="text-right">
                                    <a href="" class="btn btn-link">Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <ul class="pagination justify-content-center mt-3">
                    <li class="page-item"><a class="page-link"
                                             href="#">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active"><a class="page-link"
                                                    href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">Next</a>
                    </li>
                </ul><!-- /.pagination -->
            </div><!-- List Ends Here -->

            <div class="col-md-4 bc-gray mb-3">
                <div class="title">Filter By</div>

                <div class="panel-group" id="accordion">
                    <div class="panel panel-default mb-2">
                        <div class="panel-heading">
                            <div class="panel-title text-orange">
                                Price
                                <a data-toggle="collapse"
                                   data-parent="#accordion" href="#collapse1"
                                   class="pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                        <div id="collapse1"
                             class="panel-collapse collapse show">
                            <div class="panel-body">
                                <input type="text" class="price-slider"
                                       name="my_range" value=""/>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default mb-2">
                        <div class="panel-heading">
                            <div class="panel-title text-orange">
                                Room Type
                                <a data-toggle="collapse"
                                   data-parent="#accordion" href="#collapse2"
                                   class="pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list-unstyled">

                                    @foreach($room_types as $type)
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input"
                                                       id="type{{$type->id}}"
                                                       name="example1">
                                                <label class="custom-control-label"
                                                       for="type{{$type->id}}">
                                                    {{$type->type}}
                                                    <span class="badge badge-info ml-1">
                                                    {{$type->rooms_count}}
                                                </span>
                                                </label>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default mb-2">
                        <div class="panel-heading">

                            <a data-toggle="collapse"
                               data-parent="#accordion" href="#collapse3"
                               class="">
                                <div class="panel-title text-orange">
                                    Hotels
                                    <i class="fa fa-chevron-down pull-right"></i>
                                </div>
                            </a>

                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list-unstyled">

                                    @foreach($hotels as $hotel)
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input"
                                                       id="hotel{{$hotel->id}}"
                                                       name="example1">
                                                <label class="custom-control-label"
                                                       for="hotel{{$hotel->id}}">
                                                    {{$hotel->name}}
                                                    <span class="badge badge-info ml-1">
                                                    {{$hotel->rooms_count}}
                                                </span>
                                                </label>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default mb-2">
                        <div class="panel-heading">
                            <div class="panel-title text-orange">
                                Amenities
                                <a data-toggle="collapse"
                                   data-parent="#accordion" href="#collapse4"
                                   class="pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et
                                dolore
                                magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi
                                ut
                                aliquip ex ea commodo consequat.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default mb-2">
                        <div class="panel-heading">
                            <div class="panel-title text-orange">
                                Location
                                <a data-toggle="collapse"
                                   data-parent="#accordion" href="#collapse5"
                                   class="pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et
                                dolore
                                magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi
                                ut
                                aliquip ex ea commodo consequat.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <!--Plugin JavaScript file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>

    <script>
        $(".price-slider").ionRangeSlider({
            type: "double",
            grid: true,
            min: 0,
            max: 1000,
            from: 200,
            to: 800,
            prefix: "$"
        });
    </script>
@endsection