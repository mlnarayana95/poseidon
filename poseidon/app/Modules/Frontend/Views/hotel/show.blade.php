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
    
    #myCarousel .carousel-inner{
      max-height: 467px;
    }
    
    #myCarousel{
      max-width: 700px;
      margin: 0 auto 30px;
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
    
    .hotel-name{
      padding: 25px;
    }
    
    .location-icon.fas{
      color: #161527;
    }
    
    .hotel-location{
      font-size: 1.4em;
    color: #16152;
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
      max-height: 349px;
      width: 100%;
    }
    

@endsection

@section('content')

<div id='hotel-page'>
  <div class="container hotel-name text-center">
    <h1>{{ $hotel->name }}</h1>
    <div class="hotel-location"><i class="fas fa-map-marker-alt fa-lg location-icon"></i>{{ $hotel->location->location }}</div>
  </div>

  <div class="row align-items-center">
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

  
    <section id="tabs">
  	<div class="container tab-container">
  		<div class="row">
  			<div class="col-md-12 ">
  				<nav>
  					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
  						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-hotel fa-sm tab-icons"></i>Overview</a>
  						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="far fa-check-square fa-sm tab-icons"></i> Amenities</a>
  						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fas fa-search fa-sm tab-icons"></i>Details</a>
  				</nav>
  				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
  					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="hotel-description">{{ $hotel->description}}</div>
                  <div class="check-in-out">
                    <span><strong>Check in - </strong>{{ $hotel->checkin_time }}</span>
                    <br>
                    <span><strong>Check out - </strong>{{ $hotel->checkout_time }}</span>
                  </div>
                  <div class="hotel-location">{{ $hotel->address}}</div>
                  <div class="hotel-phone">
                    <span><em>Phone number: </em>{{ $hotel->phone_number }}</span>
                  </div>
  					</div>
  					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="col-md-12">
              <div class="hotel-amenities">
                @foreach($hotel->amenities as $amenity)
                  <div class="looped-info"><i class="fa fa-{{ $amenity->amenity_icon }} looped-icon"></i>{{ $amenity->amenity }}</div>
                @endforeach
              </div>
  					</div>
          </div>
    		<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
              <div class="hotel-distance">
                <span><strong>Distance from Airport: </strong>{{ $hotel->airport_distance }} <em>with</em> <strong>Transportation Charge: </strong>{{ $hotel->airport_transportation }}</span>
              </div>
              <div class="check-in-out">
                <span><strong>is pet friendly? </strong>{{ $hotel->pet_friendly ? 'yes' : 'no' }}</span>
              </div>
  					</div>
  				</div>
         </div>
  		  </div>
  		</div>
  	</div>
  </section>
</div> <!-- hotel-page div -->

@endsection