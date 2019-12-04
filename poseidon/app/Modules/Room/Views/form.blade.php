<div class="form-group">
    {!!Form::label('hotel_id', 'Select Hotel *', array('class' => 'col-md-2 col-sm-12 control-label')) !!}
    <div class="col-md-10 col-sm-12">
        {!!Form::select('hotel_id', $hotels, null, array('class' => 'form-control select2', 'id' => 'hotel_id', 'style'=>'width: 100%;'))!!}
    </div>
</div>

<div class="form-group @if($errors->has('room_number')) {{'has-error'}} @endif">
    {!!Form::label('room_number', 'Room Number *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <div class="input-group">
            <div class="input-group-addon">
                No.
            </div>

            {!!Form::number('room_number', null, array('class' => 'form-control', 'id'=>'room_number'))!!}
        </div>
        @if($errors->has('room_number'))
            {!! $errors->first('room_number', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors->has('room_cost')) {{'has-error'}} @endif">
    {!!Form::label('room_cost', 'Room Cost *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <div class="input-group">
            <div class="input-group-addon">$</div>

            {!!Form::number('room_cost', null, array('class' => 'form-control', 'id'=>'room_cost'))!!}

            <div class="input-group-addon">.00</div>
        </div>
        @if($errors->has('room_cost'))
            {!! $errors->first('room_cost', '<label class="control-label"
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

<div class="form-group @if($errors->has('max_adults')) {{'has-error'}} @endif">
    {!!Form::label('max_adults', 'Max Adults Allowed *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-male"></i><i class="fa fa-female"></i>
            </div>

            {!!Form::number('max_adults', null, array('class' => 'form-control', 'id'=>'max_adults'))!!}
        </div>
        @if($errors->has('max_adults'))
            {!! $errors->first('max_adults', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors->has('max_children')) {{'has-error'}} @endif">
    {!!Form::label('max_children', 'Max Children Allowed *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-child"></i>
            </div>

            {!!Form::number('max_children', null, array('class' => 'form-control', 'id'=>'max_children'))!!}
        </div>
        @if($errors->has('max_children'))
            {!! $errors->first('max_children', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group">
    {!!Form::label('room_type_id', 'Room Type *', array('class' => 'col-md-2 col-sm-12 control-label')) !!}
    <div class="col-md-10 col-sm-12">
        {!!Form::select('room_type_id', $types, null, array('class' => 'form-control select2', 'id' => 'room_type_id', 'style'=>'width: 100%;'))!!}
    </div>
</div>

<div class="form-group @if($errors->has('no_bathrooms')) {{'has-error'}} @endif">
    {!!Form::label('no_bathrooms', 'Number of Bathrooms *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-circle-o"></i>
            </div>

            {!!Form::number('no_bathrooms', null, array('class' => 'form-control', 'id'=>'no_bathrooms'))!!}
        </div>
        @if($errors->has('no_bathrooms'))
            {!! $errors->first('no_bathrooms', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group">
    {!!Form::label('smoking', 'Smoking', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <strong>No </strong>
        <label class="switch">
            {!! Form::checkbox('smoking', 1, null) !!}
            <span class="slider round"></span>
        </label>
        <strong>Yes </strong>
    </div>
</div>

<div class="form-group">
    {!!Form::label('featured', 'Featured', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <strong>No </strong>
        <label class="switch">
            {!! Form::checkbox('featured', 1, null) !!}
            <span class="slider round"></span>
        </label>
        <strong>Yes </strong>
    </div>
</div>