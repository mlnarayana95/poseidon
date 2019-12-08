@extends('layouts.admin.main')
@section('title', 'Users')
@section('heading', 'Users')
@section('breadcrumb')
    @parent
    <li>
        <a href="#">Users</a>
    </li>
@stop
@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Users</h3>

                <div class="box-tools">
                    <a href="{{ route('admin.user.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus-circle"></i> Add User
                    </a>
                </div>
            </div>
            <div class="box-body">

                <table id="users" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Member Joining Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->user_id }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->user_type ? 'Admin' : 'User'}} </td>
                            <td>{{ $user->created_at->format('M d Y')}}</td>
                            <td>
                                <a href="{{ route('admin.user.edit', 
                                $user->user_id) }}" class="btn btn-primary marginRight">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <a href="{{ route('admin.user.destroy', $user) }}" data-method="delete"
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
            $('#users').DataTable({
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