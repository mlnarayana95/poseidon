@extends('layouts.admin.main')
@section('title', 'Locations')
@section('heading', 'Locations')
@section('breadcrumb')
 @parent
    <li>
        <a href="#">Locations</a>
    </li>
@stop
@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Locations</h3>

                <div class="box-tools">
                    <a href="{{ route('admin.location.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus-circle"></i> Add Location
                    </a>
                </div>
            </div>
            <div class="box-body">

                <table id="locations" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Location</th>
                        <th>Slug</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($locations as $location)
                        <tr>
                            <td>{{ $location->id }}</td>
                            <td>{{ $location->location }}</td>
                            <td>{{ $location->slug }}</td>
                            <td>
                                <a href="{{ route('admin.location.edit', $location) }}" class="btn btn-primary marginRight">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <a href="{{ route('admin.location.destroy', $location) }}" data-method="delete"
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
            $('#locations').DataTable({
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