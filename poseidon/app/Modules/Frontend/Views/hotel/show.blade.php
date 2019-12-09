@extends('layouts.frontend.main')
@section('title', 'Poseidon | ' . $hotel->name)

@section('heading', $hotel->name)

@section('breadcrumb')
    @parent
    <li><a href="/hotels">Hotels</a></li>
    <li>{{ $hotel->name }}</li>
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
    opacity: 0.7;
    }
@endsection

@section('content')

    <div class="container">
        <h1>{{ $hotel->name }}</h1>
        @foreach($hotel->images as $image)
            <img src="/images/hotels/{{ $image->file_name }}" alt=""/>
            @endforeach
    </div>

    <div class="container py-2">
        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-8 offset-lg-2" id="slider">
                <div id="myCarousel" class="carousel slide shadow">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="active carousel-item" data-slide-number="0">
                            <img src="http://placehold.it/1200x480&amp;text=one" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="1">
                            <img src="http://placehold.it/1200x480/888/FFF" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="2">
                            <img src="http://placehold.it/1200x480&amp;text=three" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="3">
                            <img src="http://placehold.it/1200x480&amp;text=four" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="4">
                            <img src="http://placehold.it/1200x480&amp;text=five" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="5">
                            <img src="http://placehold.it/1200x480&amp;text=six" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="6">
                            <img src="http://placehold.it/1200x480&amp;text=seven" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="7">
                            <img src="http://placehold.it/1200x480&amp;text=eight" class="img-fluid">
                        </div>

                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                    <!-- main slider carousel nav controls -->


                    <ul class="carousel-indicators list-inline mx-auto border px-2">
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                <img src="http://placehold.it/80x60&amp;text=one" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                <img src="http://placehold.it/80x60&amp;text=two" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                <img src="http://placehold.it/80x60&amp;text=three" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                                <img src="http://placehold.it/80x60&amp;text=four" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                                <img src="http://placehold.it/80x60&amp;text=five" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-5" data-slide-to="5" data-target="#myCarousel">
                                <img src="http://placehold.it/80x60&amp;text=six" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-6" data-slide-to="6" data-target="#myCarousel">
                                <img src="http://placehold.it/80x60&amp;text=seven" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-7" data-slide-to="7" data-target="#myCarousel">
                                <img src="http://placehold.it/80x60&amp;text=eight" class="img-fluid">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!--/main slider carousel-->
    </div>


@endsection