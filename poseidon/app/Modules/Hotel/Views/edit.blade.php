@extends('layouts.admin.main')
@section('title', 'Update Hotel')
@section('heading', 'Update Hotel')
@section('breadcrumb')
    @parent
    <li>
        <a href="{{ route('admin.hotel.index') }}">Hotels</a>
        <a href="#">Update</a>
    </li>
@stop

@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Hotel Details</h3>
            </div>

            {!! Form::model($hotel, ['route' => ['admin.hotel.update', $hotel->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
            <div class="box-body">
                @include('Hotel::form')
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