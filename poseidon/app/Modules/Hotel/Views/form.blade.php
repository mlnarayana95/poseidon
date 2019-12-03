<div class="form-group @if($errors->has('name')) {{'has-error'}} @endif">
    {!!Form::label('name', 'Hotel Name *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('name', null, array('class' => 'form-control', 'id'=>'name'))!!}
        @if($errors->has('name'))
            {!! $errors->first('name', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors->has('description')) {{'has-error'}} @endif">
    {!!Form::label('description', 'Description', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::textarea('description', null, array('class' => 'form-control', 'id'=>'description'))!!}
        @if($errors->has('description'))
            {!! $errors->first('description', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group">
    {!!Form::label('location_id', 'Select Location *', array('class' => 'col-md-2 col-sm-12 control-label')) !!}
    <div class="col-md-10 col-sm-12">
        {!!Form::select('location_id', $locations, null, array('class' => 'form-control institute select2', 'id' => 'institute'))!!}
    </div>
</div>

<div class="form-group @if($errors->has('address')) {{'has-error'}} @endif">
    {!!Form::label('address', 'Address *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('address', null, array('class' => 'form-control', 'id'=>'address'))!!}
        @if($errors->has('address'))
            {!! $errors->first('address', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors->has('postal_code')) {{'has-error'}} @endif">
    {!!Form::label('postal_code', 'Postal Code *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('postal_code', null, array('class' => 'form-control', 'id'=>'postal_code'))!!}
        @if($errors->has('postal_code'))
            {!! $errors->first('postal_code', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors->has('checkin_time')) {{'has-error'}} @endif">
    {!!Form::label('checkin_time', 'Check In Time *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
            </div>

            {!!Form::text('checkin_time', null, array('class' => 'form-control timepicker', 'id'=>'checkin_time'))!!}
        </div>

        <div class="input-group date" id="timepicker" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker"/>
            <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
            </div>
        </div>

        @if($errors->has('checkin_time'))
            {!! $errors->first('checkin_time', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>