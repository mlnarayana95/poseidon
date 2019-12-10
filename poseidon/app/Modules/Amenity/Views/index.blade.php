@extends('layouts.admin.main')
@section('title', 'Amenities')
@section('heading', 'Amenities')
@section('breadcrumb')
    @parent
    <li>
        <a href="#">Amenity</a>
    </li>
@stop

@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Amenities</h3>

                <div class="box-tools">
                    <a href="{{ route('admin.amenity.create') }}"
                       class="btn btn-primary">
                        <i class="fa fa-plus-circle"></i> Add Amenity
                    </a>
                </div>
            </div>
            <div class="box-body">

                <table id="amenities" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Amenity ID</th>
                        <th>Amenity</th>
                        <th>Icon</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($amenity as $amenity)
                        <tr>
                            <td>{{ $amenity->id }}</td>
                            <td>{{ $amenity->amenity }}</td>
                            <td>{{ $amenity->amenity_icon }}</td>
                            <td>
                                <a href="{{ route('admin.amenity.edit', $amenity) }}"
                                   class="btn btn-primary marginRight">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>


                                <a href="{{ route('admin.amenity.destroy', $amenity) }}" data-method="delete"
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
            $('#amenities').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false,
                "order": [[ 0, "desc" ]]
            });
        });
    </script>
@endsection