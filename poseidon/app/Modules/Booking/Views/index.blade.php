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
                <h3 class="box-title">All Bookings</h3>
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
                            <td>{{ $booking->user->person->last_name.','.$booking->user->person->first_name }}</td>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->room_id }}</td>
                            <td>{{ $booking->room->room_number }}</td>
                            <td>{{ $booking->transaction_number }}</td>
                            <td>{{ $booking->checkin_date }}</td>
                            <td>{{ $booking->checkout_date }}</td>
                            <td>{{ $booking->total_cost }}</td>
                           <td>{{ $booking->amount_payment }}</td>

                            <td>
                                <a href="{{ route('admin.booking.show', $booking) }}"
                                   class="btn btn-primary marginRight">
                                    <i class="fa fa-eye"></i> view
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