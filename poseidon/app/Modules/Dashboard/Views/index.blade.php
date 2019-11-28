@extends('layouts.admin.main')
@section('title', 'Dashboard')
@section('heading', 'Dashboard')
@section('breadcrumb')
    @parent
@stop
@section('content')

    <div class="col-xs-12">
        {{--@include('flash::message')--}}

        <div class="box box-primary">
            <div class="box-body">
            </div>
        </div>
    </div>

@stop