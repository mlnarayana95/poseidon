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

<div class="form-group @if($errors->has('amenities')) {{'has-error'}} @endif">
    {!!Form::label('amenities', 'Amenities *', array('class' => 'col-md-2 col-sm-12 control-label')) !!}
    <div class="col-md-10 col-sm-12">
        {!!Form::select('amenities[]', $amenities, null, array('class' => 'form-control select2', 'id' => 'amenities', 'style'=>'width: 100%;', 'multiple' => 'multiple'))!!}
        @if($errors->has('amenities'))
            {!! $errors->first('amenities', '<label class="control-label"
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
        {!!Form::select('location_id', $locations, null, array('class' => 'form-control select2', 'id' => 'location_id', 'style'=>'width: 100%;'))!!}
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

<div class="form-group @if($errors->has('phone_number')) {{'has-error'}} @endif">
    {!!Form::label('phone_number', 'Phone Number *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-phone"></i>
            </div>

            {!!Form::text('phone_number', null, array('class' => 'form-control', 'id'=>'phone_number'))!!}
        </div>
        @if($errors->has('phone_number'))
            {!! $errors->first('phone_number', '<label class="control-label"
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

        @if($errors->has('checkin_time'))
            {!! $errors->first('checkin_time', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors->has('checkout_time')) {{'has-error'}} @endif">
    {!!Form::label('checkout_time', 'Check Out Time *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
            </div>

            {!!Form::text('checkout_time', null, array('class' => 'form-control timepicker', 'id'=>'checkout_time'))!!}
        </div>

        @if($errors->has('checkout_time'))
            {!! $errors->first('checkout_time', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors->has('airport_distance')) {{'has-error'}} @endif">
    {!!Form::label('airport_distance', 'Airport Distance', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('airport_distance', null, array('class' => 'form-control', 'id'=>'airport_distance'))!!}
        @if($errors->has('airport_distance'))
            {!! $errors->first('airport_distance', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors->has('airport_transportation')) {{'has-error'}} @endif">
    {!!Form::label('airport_transportation', 'Airport Transportation', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('airport_transportation', null, array('class' => 'form-control', 'id'=>'airport_transportation'))!!}
        @if($errors->has('airport_transportation'))
            {!! $errors->first('airport_transportation', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group">
    {!!Form::label('pet_friendly', 'Pet Friendly', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <strong>No </strong>
        <label class="switch">
            {!! Form::checkbox('pet_friendly', 1, null) !!}
            <span class="slider round"></span>
        </label>
        <strong>Yes </strong>
    </div>
</div>

<div class="form-group @if($errors->has('image')) {{'has-error'}} @endif">
    {!!Form::label('image', 'Image Upload', array('class' => 'col-sm-2 control-label custom-file-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('image[]', $attributes = array('multiple','class'=>'form-control custom-file-input','id'=>'image')) !!}
        @if($errors->has('image'))
            {!! $errors->first('image', '<label class="control-label"
                                                   for="inputError">The file must be an image and below 2 MB size</label>') !!}
        @endif
    </div>
