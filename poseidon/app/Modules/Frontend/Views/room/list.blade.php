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

                @if(isset($search) && !empty($search))
                <div class="callout callout-info">
                    <h4><i class="fa fa-search"></i> Search Results!</h4>
                    <p>{{ $rooms->total() }} record(s) found.</p>
                </div>
                @endif

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

                <div class="pagination-links mt-3">
                    {!! $rooms->appends(Request::except('page'))->links() !!}
                </div>
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

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <script>
        $(".price-slider").ionRangeSlider();

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