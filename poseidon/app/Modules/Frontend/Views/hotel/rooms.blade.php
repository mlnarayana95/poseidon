@extends('layouts.frontend.main')
@section('title', 'Room List')

@section('heading', 'Choose Form Our Best Rooms')

@section('breadcrumb')
    @parent
    <li><a href="/hotels">Hotels</a></li>
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
                                <img src="/images/rooms/{{ $room->images->first()->file_name }}" alt="Code" class="img-fit" />
                            </div>
                            <div class="room-info">
                                <div class="room-title">
                                    <a href="/room/{{ $room->id }}">{{ $room->full_name }}</a>
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
                                    {{ limit_words($room->description) }}
                                </div>

                                <hr/>

                                <div class="text-right">
                                    <a href="/room/{{ $room->id }}" class="btn btn-link">Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                @if(count($rooms) > 0)
                    <div class="pagination-links mt-3">
                        {!! $rooms->links() !!}
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="bg-warning text-white card-header">No Rooms Found</div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">
                                    Oops! Currently, there are no available rooms for your query.
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            </div><!-- List Ends Here -->

            <div class="col-md-4 bc-gray mb-3">
                @include('Frontend::partials/sidebar')
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