@if(!isset($user))
<div class="form-group @if($errors->has('email')) {{'has-error'}} @endif">
    {!!Form::label('email', 'Email *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('email', null, array('class' => 'form-control', 'id'=>'email'))!!}
        @if($errors->has('email'))
            {!! $errors->first('email', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors->has('password')) {{'has-error'}} @endif">
    {!!Form::label('password', 'Password *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::password('password',array('class' => 'form-control'))!!}
        @if($errors->has('password'))
            {!! $errors->first('password', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors->has('confirm_password')) {{'has-error'}} @endif">
    {!!Form::label('confirm_password', 'Confirm Password *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::password('confirm_password',array('class' => 'form-control'))!!}
        @if($errors->has('confirm_password'))
            {!! $errors->first('confirm_password', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>
@endif
<div class="form-group">
    {!!Form::label('user_type', 'Select User Type', array('class' => 'col-md-2 col-sm-12 control-label')) !!}
    <div class="col-md-10 col-sm-12">
       {!!Form::select('user_type', array('0' => 'User','1'=> 'Admin', ),null,['class' => 'form-control select2','style'=>'width: 100%;'])!!}
    </div>
</div>
<div class="form-group @if($errors->has('first_name')) {{'has-error'}} @endif">
    {!!Form::label('first_name', 'First Name', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('first_name', null, array('class' => 'form-control', 'id'=>'first_name'))!!}
        @if($errors->has('first_name'))
            {!! $errors->first('first_name', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors->has('last_name')) {{'has-error'}} @endif">
    {!!Form::label('last_name', 'Last Name', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('last_name', null, array('class' => 'form-control', 'id'=>'last_name'))!!}
        @if($errors->has('last_name'))
            {!! $errors->first('last_name', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group">
    {!!Form::label('gender', 'Choose Gender', array('class' => 'col-md-2 col-sm-12 control-label')) !!}
    <div class="col-md-10 col-sm-12">
       {!!Form::select('gender',array('F' => 'F','M'=> 'M', ), null,['class' => 'form-control select2','style'=>'width: 100%;'])!!}
    </div>
</div>

<div class="form-group @if($errors->has('birthdate')) {{'has-error'}} @endif">
    {!!Form::label('birthdate', 'Birth Date *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        
        {{ Form::text('birthdate', $birthdate ?? null, array('class' => 'form-control date','id' => 'birthdate','data-provide'=>'datepicker')) }}                           
    
        @if($errors->has('birthdate'))
            {!! $errors->first('birthdate', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>


<div class="form-group @if($errors->has('address')) {{'has-error'}} @endif">
    {!!Form::label('address', 'Address', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('address', null, array('class' => 'form-control', 'id'=>'address'))!!}
        @if($errors->has('address'))
            {!! $errors->first('address', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>  


<div class="form-group @if($errors->has('postal_code')) {{'has-error'}} @endif">
    {!!Form::label('postal_code', 'Postal Code', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('postal_code', null, array('class' => 'form-control', 'id'=>'address'))!!}
        @if($errors->has('postal_code'))
            {!! $errors->first('postal_code', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>  

<div class="form-group @if($errors->has('phone_number')) {{'has-error'}} @endif">
    {!!Form::label('phone_number', 'Phone Number', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('phone_number', null, array('class' => 'form-control', 'id'=>'address'))!!}
        @if($errors->has('phone_number'))
            {!! $errors->first('phone_number', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>  


