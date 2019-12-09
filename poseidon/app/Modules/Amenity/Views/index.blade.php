@extends('layouts.admin.main')
@section('title', 'Features')
@section('heading', 'Features')
@section('breadcrumb')
    @parent
    <li>
        <a href="#">Features</a>
    </li>
@stop

@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Features</h3>

                <div class="box-tools">
                    <a href="{{ route('admin.feature.create') }}"
                       class="btn btn-primary">
                        <i class="fa fa-plus-circle"></i> Add Feature
                    </a>
                </div>
            </div>
            <div class="box-body">

                <table id="features" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Feature ID</th>
                        <th>Feature</th>
                        <th>Icon</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($features as $feature)
                        <tr>
                            <td>{{ $feature->id }}</td>
                            <td>{{ $feature->feature }}</td>
                            <td>{{ $feature->feature_icon }}</td>
                            <td>
                                <a href="{{ route('admin.feature.edit', $feature) }}"
                                   class="btn btn-primary marginRight">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>


                                <a href="{{ route('admin.feature.destroy', $feature) }}" data-method="delete"
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
            $('#features').DataTable({
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