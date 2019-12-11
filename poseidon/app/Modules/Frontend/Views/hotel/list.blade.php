@extends('layouts.frontend.main')
@section('title', 'Hotel List')

@section('heading', 'Choose Form Our Best Hotels')

@section('breadcrumb')
    @parent
    <li>Hotels</li>
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

                    @foreach($hotels as $hotel) <?php //dd($hotel->featuredImage->first()->file_name) ?>
                    <div class="room shadow">
                        <div class="room-img">
                            <img src="/images/hotels/{{ $hotel->featuredImage->first()->file_name }}"
                                 alt="{{ $hotel->name }}" class="img-fit"/>
                        </div>
                        <div class="room-info">
                            <div>
                                <a href="/hotel/{{ $hotel->slug }}" class="room-title">
                                    {{ $hotel->name }}
                                </a>
                            </div>
                            <div class="mb-2">
                                from <span
                                        class="room-price">${{ $hotel->min_price }}</span>
                                per night
                            </div>

                            <div class="mb-2">
                                <i class="fa fa-map-marker"></i> {{ $hotel->address }}
                                <br/>
                                <i class="fa fa-globe"></i> {{ $hotel->location->location }}
                            </div>

                            <div class="mb-2">
                                @foreach($hotel->amenities->take(6) as $amenity)
                                    <i class="fa fa-{{ $amenity->amenity_icon }}"></i> {{ $amenity->amenity }}
                                @endforeach
                            </div>

                            <div class="mb-2">
                                {{ limit_words($hotel->description) }}
                            </div>

                            <hr/>

                            <div class="text-right">
                                <a href="/hotel/{{ $hotel->slug }}" class="btn btn-link">Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="pagination-links mt-3">
                    {!! $hotels->links() !!}
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
                               data-parent="#accordion" href="#collapse4">
                                <div class="panel-title text-orange">
                                    Amenities
                                    <i class="fa fa-chevron-down pull-right"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse show">
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    @foreach($amenities as $amenity)
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input"
                                                       id="amenity{{$amenity->id}}"
                                                       name="example1">
                                                <label class="custom-control-label"
                                                       for="amenity{{$amenity->id}}">
                                                    {{$amenity->amenity}}
                                                    <span class="badge badge-info ml-1">
                                                    {{$amenity->hotels_count}}
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
                        <div id="collapse5" class="panel-collapse collapse show">
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