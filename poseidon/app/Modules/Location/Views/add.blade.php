@extends('layouts.admin.main')
@section('title', 'Add Location')
@section('heading', 'Add Location')
@section('breadcrumb')
 @parent
    <li>
        <a href="{{ route('admin.location.index') }}">Locations</a>
        <a href="#">Add</a>
    </li>
@stop

@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Location Details</h3>
            </div>

            {!! Form::open(['route' => 'admin.location.store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
            <div class="box-body">
                @include('Location::form')
            </div>
            <div class="box-footer">
                {!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}
            </div>
            {!! Form::close() !!}


        </div>
    </div>
@endsection

@section('scripts')
@endsection