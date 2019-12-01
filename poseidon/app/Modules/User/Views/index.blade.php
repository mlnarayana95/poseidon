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

    <div class="col-xs-12">
        {{--@include('flash::message')--}}

        <div class="box box-primary">
            <div class="box-body">

            </div>
        </div>
    </div>

@stop