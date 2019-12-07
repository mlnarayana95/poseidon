@extends('layouts.admin.main')
@section('title', 'Hotels')
@section('heading', 'Hotels')
@section('breadcrumb')
    @parent
    <li>
        <a href="#">Hotels</a>
    </li>
@stop

@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Hotels</h3>

                <div class="box-tools">
                    <a href="{{ route('admin.hotel.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus-circle"></i> Add Hotel
                    </a>
                </div>
            </div>
            <div class="box-body">

                <table id="hotels" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Hotel ID</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($hotels as $hotel)
                        <tr>
                            <td>{{ $hotel->id }}</td>
                            <td>{{ $hotel->name }}</td>
                            <td>{{ $hotel->location->location }}</td>
                            <td>{{ $hotel->phone_number }}</td>
                            <td>
                                <a href="{{ route('admin.hotel.edit', $hotel) }}" class="btn btn-primary marginRight">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <a href="{{ route('admin.hotel.destroy', $hotel) }}" data-method="delete"
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
            $('#hotels').DataTable({
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