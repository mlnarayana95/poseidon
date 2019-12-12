@extends('layouts.admin.main')
@section('title', 'Dashboard')
@section('heading', 'Dashboard')
@section('breadcrumb')
    @parent
@stop
@section('content')


    <div class="col-xs-12">
        {{--@include('flash::message')--}}

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>

                        <p>New Bookings</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="/admin/bookings" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>$25,345<sup style="font-size: 20px">CAD</sup></h3>

                        <p>Cash Inflow</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <a href="/admin/bookings" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Customer Registration</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/admin/customers" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>404</h3>

                        <p>Rooms</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-coffee"></i>
                    </div>
                    <a href="/admin/rooms" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Upcoming Bookings</h3>
            </div>
            <div class="box-body">
                <table id="booking" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Booking ID</th>
                        <th>Room ID</th>
                        <th>Room Number</th>
                        <th>Transaction Number</th>
                        <th>Checkin Date</th>
                        <th>Checkout Date</th>
                        <th>Total cost</th>
                        <th>Payment Amount</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($bookings as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->user_id }}</td>
                            <td>{{ $booking->room_id }}</td>
                            <td>{{ $booking->transaction_number }}</td>
                            <td>${{ $booking->room_cost }}</td>
                            <td>${{ $booking->total_fees }}</td>
                            <td>${{ $booking->total_tax }}</td>
                            <td>${{ $booking->total_cost }}</td>
                            <td>{{ $booking->payment_type }}</td>
                            <td>{{ $booking->amount_payment }}</td>
                            <td>{{ $booking->checkin_date }}</td>
                            <td>{{ $booking->checkout_date }}</td>
                            <td>
                                <a href="{{ route('admin.booking.edit', $room) }}"
                                   class="btn btn-primary marginRight">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>


                                <a href="{{ route('admin.booking.destroy', $room) }}" data-method="delete"
                                   data-token="{{csrf_token()}}"
                                   data-confirm="Are you sure?" class="btn btn-danger">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <script>
        $(function () {
            $('#rooms').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            });
        });
    </script>
@endsection