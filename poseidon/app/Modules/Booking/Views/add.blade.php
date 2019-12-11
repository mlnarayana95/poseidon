@extends('layouts.admin.main')
@section('title', 'Add Booking')
@section('heading', 'Add Booking')
@section('breadcrumb')
    @parent
    <li>
        <a href="{{ route('admin.booking.index') }}">Hotels</a>
        <a href="#">Add</a>
    </li>
@stop

@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Booking Details</h3>
            </div>

            {!! Form::open(['route' => 'admin.booking.store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
            <div class="box-body">
                @include('Booking::form')
            </div>
            <div class="box-footer">
                {!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}
            </div>
            {!! Form::close() !!}


        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.timepicker').timepicker({
            showInputs: false
        });

        $('.select2').select2();
    </script>
@endsection