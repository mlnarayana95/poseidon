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
<style>
button.btn {
  margin-right: 10px;
}
</style>
    <div class="col-xs-12">
        {{--@include('flash::message')--}}

        <div class="box box-primary">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">First Name</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Last Name</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Phone Number: activate to sort column ascending">Phone Numbers</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Member Join Date: activate to sort column ascending">Member Join Date</th><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="User Type: activate to sort column descending">User Type</th><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Actions: activate to sort column descending">Actions</th></tr>
                </thead>
                <tbody>
                <tr role="row" class="odd">
                  <td class="sorting_1">Katie</td>
                  <td>Peters</td>
                  <td>204-555-1234</td>
                  <td>kpeters@poseidon.com</td>
                  <td>11/29/2019</td>
                  <td>admin</td>
                  <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-danger">Delete</button></td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Krita</td>
                  <td>Maharjan</td>
                  <td>204-555-3445</td>
                  <td>kmaharjan@poseidon.com</td>
                  <td>11/29/2019</td>
                  <td>admin</td>
                  <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-danger">Delete</button></td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Juan</td>
                  <td>Valenzuela</td>
                  <td>204-555-9876</td>
                  <td>jalenzuela@poseidon.com</td>
                  <td>11/29/2019</td>
                  <td>admin</td>
                  <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-danger">Delete</button></td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Evgheni</td>
                  <td>Sipco</td>
                  <td>204-555-8765</td>
                  <td>esipco@poseidon.com</td>
                  <td>11/29/2019</td>
                  <td>admin</td>
                  <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-danger">Delete</button></td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Steve</td>
                  <td>George</td>
                  <td>204-555-5684</td>
                  <td>steve@pagerange.com</td>
                  <td>12/03/2019</td>
                  <td>user</td>
                  <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-danger">Delete</button></td>
                </tr></tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">First Name</th><th rowspan="1" colspan="1">Last Name</th><th rowspan="1" colspan="1">Phone Number</th><th rowspan="1" colspan="1">Email</th><th rowspan="1" colspan="1">Member Join Date</th><th rowspan="1" colspan="1">User Type</th><th rowspan="1" colspan="1">Actions</th></tr>
                </tfoot>
              </table>

            </div>
        </div>
    </div>

@stop