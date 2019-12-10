@extends('layouts.frontend.main')
@section('title', 'Poseidon | ' . $hotel->name)

@section('heading', $hotel->name)

@section('breadcrumb')
    @parent
    <li><a href="/hotels">Hotels</a></li>
    <li>{{ $hotel->name }}</li>
    
    <style>
    #hotel-page .container h1{
      text-align: left;
      font-size: 20px;
      display: inline-block;
      padding-right: 20px;
      margin-top: 20px;
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

  
    </style>
@stop

@section('content')

<div id='hotel-page'>
  <div class="container">
    <h1>{{ $hotel->name }}</h1>
    <div class="hotel-location">{{ $hotel->address}}</div>
  </div>
  
  
  
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="about-hotel">
          Before You Go
        </div>
        <div class="hotel-description">{{ $hotel->description}}</div>
      </div>
      
      <div class="col-md-6">
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
</div> <!-- hotel-page div -->





    <!--@foreach($hotel->images as $image)
        <img src="/images/hotels/{{ $image->file_name }}" alt=""/>
        @endforeach -- >
@endsection