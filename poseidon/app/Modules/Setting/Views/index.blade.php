@extends('layouts.admin.main')
@section('title', 'Site Settings')
@section('heading', 'Site Settings')
@section('breadcrumb')
    @parent
    <li>
        <a href="#">Site Settings</a>
    </li>
@stop

@section('content')
    <div class="col-xs-12">
        @include('flash::message')

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Update Site Settings</h3>
            </div>

            {!! Form::model($setting, ['route' => 'admin.setting.update', 'method' => 'put', 'class' => 'form-horizontal']) !!}
            <div class="box-body">

                <div class="form-group @if($errors->has('gst_tax')) {{'has-error'}} @endif">
                    {!!Form::label('gst_tax', 'GST Tax *', array('class' => 'col-sm-2 control-label')) !!}
                    <div class="col-sm-8">
                        <div class="input-group">
                            {!!Form::text('gst_tax', null, array('class' => 'form-control', 'id'=>'gst_tax'))!!}
                            <div class="input-group-addon">%</div>
                        </div>
                        @if($errors->has('gst_tax'))
                            {!! $errors->first('gst_tax', '<label class="control-label"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                </div>

                <div class="form-group @if($errors->has('pst_tax')) {{'has-error'}} @endif">
                    {!!Form::label('pst_tax', 'PST Tax *', array('class' => 'col-sm-2 control-label')) !!}
                    <div class="col-sm-8">
                        <div class="input-group">
                            {!!Form::text('pst_tax', null, array('class' => 'form-control', 'id'=>'pst_tax'))!!}
                            <div class="input-group-addon">%</div>
                        </div>

                        @if($errors->has('pst_tax'))
                            {!! $errors->first('pst_tax', '<label class="control-label"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                </div>

                <div class="form-group @if($errors->has('contact_mail')) {{'has-error'}} @endif">
                    {!!Form::label('contact_mail', 'Contact Email Address *', array('class' => 'col-sm-2 control-label')) !!}
                    <div class="col-sm-8">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            {!!Form::text('contact_mail', null, array('class' => 'form-control', 'id'=>'contact_mail'))!!}
                        </div>

                        @if($errors->has('contact_mail'))
                            {!! $errors->first('contact_mail', '<label class="control-label"
                                                                   for="inputError">:message</label>') !!}
                        @endif
                    </div>
                </div>

            </div>

            <div class="box-footer">
                {!! Form::submit('Update', ['class' => 'btn btn-success pull-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection