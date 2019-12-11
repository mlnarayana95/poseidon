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
                        <th>Booking ID</th>
                        <th>User</th>
                        <th>Room</th>
                        <th>Transaction Number</th>
                        <th>Room Cost</th>
                        <th>Total Fees</th>
                        <th>Total Tax</th>
                        <th>Total cost</th>
                        <th>Payment Type</th>
                        <th>Amount Paid</th>
                        <th>Checkin Date</th>
                        <th>Checkout Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($bookings as $booking)
                        <tr>
                            <td>{{ $room->id }}</td>
                            <td>{{ $room->type->type }}</td>
                            <td>{{ $room->room_number }}</td>
                            <td>${{ $room->room_cost }}</td>
                            <td>{{ $room->hotel->name }}</td>
                            <td>
                                <a href="{{ route('admin.room.edit', $room) }}"
                                   class="btn btn-primary marginRight">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>


                                <a href="{{ route('admin.room.destroy', $room) }}" data-method="delete"
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