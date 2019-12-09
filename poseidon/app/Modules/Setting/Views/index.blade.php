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

            {!! Form::open(['route' => 'admin.setting.update', 'method' => 'put', 'class' => 'form-horizontal']) !!}
            <div class="box-body">

                    @if(count(config('settings', [])) )

                        @foreach(config('settings') as $section => $fields)
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <i class="{{ Arr::get($fields, 'icon', 'fa fa-flash') }}"></i>
                                    {{ $fields['title'] }}
                                </div>

                                <div class="panel-body">
                                    <p class="text-muted">{{ $fields['desc'] }}</p>
                                </div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-7  col-md-offset-2">
                                            @foreach($fields['elements'] as $field)
                                                @includeIf('Setting::fields/' . $field['type'] )
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <!-- end panel for {{ $fields['title'] }} -->
                        @endforeach

                    @endif



            </div>

            <div class="box-footer">
                {!! Form::submit('Save Settings', ['class' => 'btn btn-success pull-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection