@extends('layouts.admin.main')
@section('title', 'Rooms')
@section('heading', 'Rooms')
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
                    <a href="{{ route('admin.room.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus-circle"></i> Add Room
                    </a>
                </div>
            </div>
            <div class="box-body">

                <table id="rooms" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Room ID</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($rooms as $room)
                        <tr>
                            <td>{{ $room->id }}</td>
                            <td>{{ $room->name }}</td>
                            <td>{{ $room->location->location }}</td>
                            <td>{{ $room->phone_number }}</td>
                            <td>
                                <a href="{{ route('admin.room.edit', $room) }}" class="btn btn-primary marginRight">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <a href="#" type="button" class="btn btn-danger">
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