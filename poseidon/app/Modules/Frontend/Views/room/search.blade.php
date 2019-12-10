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
                <div class="alert alert-info">
                    Displaying Search Results
                </div>
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
                                        <i class="fa fa-{{ $feature->feature_icon }}"></i> {{ $feature->feature }}
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

                <div class="pagination-links mt-3">
                    {!! $rooms->links() !!}
                </div>
            </div><!-- List Ends Here -->

            <div class="col-md-4 bc-gray mb-3">
                <div class="title">Filter By</div>

                <div class="panel-group" id="accordion">
                    <div class="panel panel-default mb-2">
                        <div class="panel-heading">

                            <a data-toggle="collapse"
                               data-parent="#accordion" href="#collapse1">
                                <div class="panel-title text-orange">
                                    Price
                                    <i class="fa fa-chevron-down pull-right"></i>
                                </div>
                            </a>
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

                            <a data-toggle="collapse"
                               data-parent="#accordion" href="#collapse2">
                                <div class="panel-title text-orange">
                                    Room Types
                                    <i class="fa fa-chevron-down pull-right"></i>
                                </div>
                            </a>
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
                               data-parent="#accordion" href="#collapse3">
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

                            <a data-toggle="collapse"
                               data-parent="#accordion" href="#collapse4">
                                <div class="panel-title text-orange">
                                    Features
                                    <i class="fa fa-chevron-down pull-right"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    @foreach($features as $feature)
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input"
                                                       id="feature{{$feature->id}}"
                                                       name="example1">
                                                <label class="custom-control-label"
                                                       for="feature{{$feature->id}}">
                                                    {{$feature->feature}}
                                                    <span class="badge badge-info ml-1">
                                                    {{$feature->rooms_count}}
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
                               data-parent="#accordion" href="#collapse5">
                                <div class="panel-title text-orange">
                                    Location
                                    <i class="fa fa-chevron-down pull-right"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    @foreach($locations as $location)
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input"
                                                       id="location{{$location->id}}"
                                                       name="example1">
                                                <label class="custom-control-label"
                                                       for="location{{$location->id}}">
                                                    {{$location->location}}
                                                    <span class="badge badge-info ml-1">
                                                    {{$location->rooms_count}}
                                                </span>
                                                </label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
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