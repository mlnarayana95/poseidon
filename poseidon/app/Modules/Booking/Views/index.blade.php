@extends('layouts.admin.main')
@section('title', 'Bookings')
@section('heading', 'Bookings')
@section('breadcrumb')
    @parent
    <li>
        <a href="#">Rooms</a>
    </li>
@stop

@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Rooms</h3>

                <div class="box-tools">
                    <a href="{{ route('admin.booking.create') }}"
                       class="btn btn-primary">
                        <i class="fa fa-plus-circle"></i> Add Room
                    </a>
                </div>
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
@endsection

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