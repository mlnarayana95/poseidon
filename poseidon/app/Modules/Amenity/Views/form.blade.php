<div class="form-group @if($errors->has('feature')) {{'has-error'}} @endif">
    {!!Form::label('feature', 'Feature', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('feature', null, array('class' => 'form-control', 'id'=>'feature'))!!}
        @if($errors->has('feature'))
            {!! $errors->first('feature', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors->has('feature_icon')) {{'has-error'}} @endif">
    {!!Form::label('feature_icon', 'Icon', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('feature_icon', null, array('class' => 'form-control', 'id'=>'feature_icon'))!!}
        @if($errors->has('feature_icon'))
            {!! $errors->first('feature_icon', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>