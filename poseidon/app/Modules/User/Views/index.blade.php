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
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Member Joining Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                            <td><a href="mailto:emailhere">{{ $user->user->email }}</a></td>
                            <td><a href="tel:phone">{{ $user->phone_number}}</a></td>
                            <td>{{ $user->created_at->format('M d Y')}}</td>
                            <td>
                                <a href="{{ route('admin.user.edit', 
                                $user->id) }}" class="btn btn-primary marginRight">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <a href="{{ route('admin.user.destroy', $user->id) }}" data-method="delete"
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