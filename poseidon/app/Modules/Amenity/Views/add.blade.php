@extends('layouts.admin.main')
@section('title', 'Add Amenity')
@section('heading', 'Add Amenity')
@section('breadcrumb')
    @parent
    <li>
        <a href="{{ route('admin.Amenity.index') }}">Amenityes</a>
        <a href="#">Add</a>
    </li>
@stop

@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Amenity Details</h3>
            </div>

            {!! Form::open(['route' => 'admin.amenity.store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
            <div class="box-body">
                @include('Amenity::form')
            </div>
            <div class="box-footer">
                {!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}
            </div>
            {!! Form::close() !!}


        </div>
    </div>
@endsection