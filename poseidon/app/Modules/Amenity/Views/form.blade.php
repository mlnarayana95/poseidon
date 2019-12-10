<div class="form-group @if($errors->has('')) {{'has-error'}} @endif">
    {!!Form::label('amenity', 'Amenity', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('amenity', null, array('class' => 'form-control', 'id'=>'amenity'))!!}
        @if($errors->has('amenity'))
            {!! $errors->first('amenity', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors->has('amenity_icon')) {{'has-error'}} @endif">
    {!!Form::label('amenity_icon', 'Icon', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('amenity_icon', null, array('class' => 'form-control', 'id'=>'amenity_icon'))!!}
        @if($errors->has('amenity_icon'))
            {!! $errors->first('amenity_icon', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>