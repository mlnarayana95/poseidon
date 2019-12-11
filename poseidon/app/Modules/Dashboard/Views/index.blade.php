@extends('layouts.admin.main')
@section('title', 'Dashboard')
@section('heading', 'Dashboard')
@section('breadcrumb')
    @parent
@stop
@section('content')


    <div class="col-xs-12">
        {{--@include('flash::message')--}}

      <div class="box box-primary">
        <div class="box-body">    
          <div class="card text-white bg-danger mb-3 bookings" style="max-width: 18rem;">
            <div class="card-header">Bookings</div>
            <div class="card-body">
              <p class="card-text">{{$bookings}}</p>
            </div>
            </div>
            <div class="card text-white bg-warning mb-3 customers" style="max-width: 18rem;">
              <div class="card-header">Customers</div>
              <div class="card-body">
                <p class="card-text">{{ $customers }}</p>
              </div>
            </div>
            <div class="card text-white bg-info mb-3 rooms" style="max-width: 18rem;">
              <div class="card-header">Rooms</div>
              <div class="card-body">
                <p class="card-text">{{ $rooms }}</p>
              </div>
            </div>
        </div>
      </div>
    </div>

@stop