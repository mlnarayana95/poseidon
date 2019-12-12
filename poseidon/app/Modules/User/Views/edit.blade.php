@extends('layouts.admin.main')
@section('title', 'Update User')
@section('heading', 'Update User')
@section('breadcrumb')
    @parent
    <li>
        <a href="{{ route('admin.user.index') }}">Users</a>
        <a href="#">Update</a>
    </li>
@stop

@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">User Details</h3>
            </div>

            {!! Form::model($user, ['route' => ['admin.user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
            <div class="box-body">
                @include('User::form')
            </div>
            <div class="box-footer">
                {!! Form::submit('Update', ['class' => 'btn btn-success pull-right']) !!}
            </div>
            {!! Form::close() !!}


        </div>
    </div>
@endsection

@section('scripts')
    <script>
        
        $('.select2').select2();
    </script>
@endsection