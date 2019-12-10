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
    opacity: 1;
    }
    
    #hotel-page .container h1{
      text-align: left;
      font-size: 20px;
      display: inline-block;
      padding-right: 20px;
      margin-top: 20px;
    }
    
    #hotel-page div.info{
      text-align: center;
    }
    
    .hotel-star.fas {
      color: #000;
      display: inline-block;
    }
    
    .hotel-star.fas:last-child{
      color: #fff;
    }
    
    
    .about-hotel{
      font-size: 1.3em;
      color: #000;
    }
    
    .amenity-check.fas{
      color: #000;
    }
    
    #myCarousel{
      max-width: 700px;
      margin: 0 auto 30px;
    }
    
    #hotel-page div.description{
      margin-bottom: 30px;
    }
@endsection

@section('content')

<div id='hotel-page'>
  <div class="container info">
    <h1>{{ $hotel->name }}</h1>
    <div class="hotel-location">{{ $hotel->address}}</div>
    <div class="hotel-phone">
      <span><em>Phone number: </em>{{ $hotel->phone_number }}</span>
    </div>
    <div class="check-in-out">
      <span><strong>Check in - </strong>{{ $hotel->checkin_time }}</span>
      <br>
      <span><strong>Check out - </strong>{{ $hotel->checkout_time }}</span>
    </div>
    <div class="hotel-distance">
      <span><strong>Distance from Airport: </strong>{{ $hotel->airport_distance }} <em>with</em> <strong>Transportation Charge: </strong>{{ $hotel->airport_transportation }}</span>
    </div>
    <div class="check-in-out">
      <span><strong>is pet friendly? </strong>{{ $hotel->pet_friendly ? 'yes' : 'no' }}</span>
    </div>
  </div>
  
  <div class="container">
    {{--<div id="myCarousel1" class="carousel slide"
         data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-taget="myCarousel" data-slide-to="0" class="active"></li>
         </ol>
        <div class="carousel-inner">
            
            @foreach($hotel->images as $key => $image)
            <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                <img src="/images/hotels/{{$image->file_name}}" class="d-block w-100"
                     alt="{{$image->file_name}}">
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#myCarousel"
           role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"
                      aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel"
           role="button" data-slide="next">
                <span class="carousel-control-next-icon"
                      aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>--}}
  </div>
  
  <div class="container">
    <div class="row description">
      <div class="col-md-9">
        <div class="about-hotel">
          Before You Go
        </div>
        <div class="hotel-description">{{ $hotel->description}}</div>
      </div>
      
      <div class="col-md-3">
        <div class="about-hotel">
          Amenities
        </div>
        <div class="hotel-description">
          @foreach($hotel->amenities as $amenity)
            <div> <i class="fas fa-check amenity-check"></i>{{ $amenity->amenity }}</div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-8 offset-lg-2" id="slider">
                <div id="myCarousel" class="carousel slide shadow">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        @foreach($hotel->images as $key => $image)
                            <div class="{{$key == 0 ?'active' : ''}} carousel-item" data-slide-number="{{ $key }}">
                                <img src="/images/hotels/{{$image->file_name}}" class="img-fluid" alt="{{$hotel->name}}" />
                            </div>
                        @endforeach
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
                        @foreach($hotel->images as $key => $image)
                        <li class="list-inline-item {{$key == 0 ? 'active' : ''}}">
                            <a id="carousel-selector-{{$key}}" class="{{$key == 0 ? 'selected' : ''}}" data-slide-to="{{$key}}" data-target="#myCarousel">
                                <img src="/images/hotels/{{$image->file_name}}" class="img-fluid"  alt="{{$hotel->name}}" width="80" height="60" />
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
        <!--/main slider carousel-->

</div> <!-- hotel-page div -->

@endsection