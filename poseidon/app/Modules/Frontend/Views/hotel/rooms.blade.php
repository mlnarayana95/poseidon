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
                @include('Frontend::partials/list')
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