@extends('layouts.frontend.main')
@section('title', 'Poseidon | ' . $hotel->name)

@section('heading', $hotel->name)

@section('breadcrumb')
    @parent
    <li><a href="/hotels">Hotels</a></li>
    <li>{{ $hotel->name }}</li>
    

@stop

@section('style')
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
                  <div class="d-flex">
                      <div>
                          <div class="mb-2">
                              <strong>Check-in
                                  Time</strong>
                          </div>
                          <div class="pos-rel">
                              <div class="top-triangle"></div>
                              <div class="check-dates">
                                  {{ format_time($hotel->checkin_time) }}
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
                                  {{ format_time($hotel->checkout_time) }}
                              </div>
                          </div>
                      </div>
                  </div>
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