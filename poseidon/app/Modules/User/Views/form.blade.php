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
<div class="form-group">
    {!!Form::label('user_type', 'Select User Type', array('class' => 'col-md-2 col-sm-12 control-label')) !!}
    <div class="col-md-10 col-sm-12">
       {!!Form::select('user_type', array('0' => 'User','1'=> 'Admin', ),null,['class' => 'form-control select2','style'=>'width: 100%;'])!!}
    </div>
</div>
