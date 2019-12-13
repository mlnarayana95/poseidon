@extends('layouts.admin.main')
@section('title', 'Customer')
@section('heading', 'Customers')
@section('breadcrumb')
    @parent
    <li>
        <a href="#">Customers</a>
    </li>
@stop
@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Customers</h3>
            </div>
            <div class="box-body">

                <table id="customers" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->user_id }}</td>
                            <td>{{ $customer->first_name . ' '. $customer->last_name }}</td>
                            <td><a href="mailto:emailhere">{{ $customer->user->email }}</a></td>
                            <td><a href="tel:phone">{{ $customer->phone_number}}</a></td>
                            <td>
                                <a href="{{ route('admin.customer.edit', 
                                $customer->user_id) }}" class="btn btn-primary marginRight">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <a href="{{ route('admin.customer.destroy', $customer->user_id) }}" data-method="delete"
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
            $('#customers').DataTable({
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