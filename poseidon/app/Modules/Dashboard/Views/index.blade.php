@extends('layouts.admin.main')
@section('title', 'Dashboard')
@section('heading', 'Dashboard')
@section('breadcrumb')
    @parent
@stop
@section('content')

<style>

.card{
  color: #fff;
  width: 21rem;
  height: 15rem;
  display: inline-block;
  margin: 30px;
  border-radius: 5px;
}

.card-header, .card-body{
  font-size: 1.6em;
  padding-left: 20px;
}

.card-header{
  padding-bottom: 10px;
  border-radius: 5px;

}

.bookings{
  background-color: #dc4245;
}

.rooms .card-header{
  background: #697179;
}

.bookings .card-header{
  background-color: #d64042;
}

.customers .card-header{
  background-color: #3f9eb2;
}

.customers{
  background-color: #42a3b8;
}

.rooms{
  background-color: #6c757d;
}

</style>


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