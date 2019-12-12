@extends('layouts.admin.main')
@section('title', 'Update Room')
@section('heading', 'Update Room')
@section('breadcrumb')
    @parent
    <li>
        <a href="{{ route('admin.room.index') }}">Rooms</a>
        <a href="#">Update</a>
    </li>
@stop

@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Room Details</h3>
            </div>

            {!! Form::model($room, ['route' => ['admin.room.update', $room->id], 'method' => 'put','enctype'=>'multipart/form-data','class' => 'form-horizontal']) !!}
            <div class="box-body">
                @include('Room::form')
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