@extends('layouts.admin.main')
@section('title', 'Update Amenity')
@section('heading', 'Update Amenity')
@section('breadcrumb')
    @parent
    <li>
        <a href="{{ route('admin.amenity.index') }}">Amenityes</a>
    </li>
    <li>
        <a href="#">Update</a>
    </li>
@stop

@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Amenityes Details</h3>
            </div>

            {!! Form::model($Amenity, ['route' => ['admin.amenity.update', $amenity->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
            <div class="box-body">
                @include('Amenity::form')
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