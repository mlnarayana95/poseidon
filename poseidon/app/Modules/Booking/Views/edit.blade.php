@extends('layouts.admin.main')
@section('title', 'Update Booking')
@section('heading', 'Update Booking')
@section('breadcrumb')
    @parent
    <li>
        <a href="{{ route('admin.booking.index') }}">Hotels</a>
        <a href="#">Update</a>
    </li>
@stop

@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Booking Details</h3>
            </div>

            {!! Form::model($booking, ['route' => ['admin.booking.update', $booking->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
            <div class="box-body">
                @include('Booking::form')
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
        $('.timepicker').timepicker({
            showInputs: false
        });

        $('.select2').select2();
    </script>
@endsection