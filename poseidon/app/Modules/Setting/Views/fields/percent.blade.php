<div class="form-group @if($errors->has($field['name'])) {{'has-error'}} @endif">
    {!!Form::label($field['name'], $field['label'] . ' *', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <div class="input-group">
            {!!Form::text($field['name'], old($field['name'], \setting($field['name'])), array('class' => 'form-control '. Arr::get( $field, 'class'), 'id'=>$field['name']))!!}
            <div class="input-group-addon">%</div>
        </div>
        @if($errors->has($field['name']))
            {!! $errors->first($field['name'], '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>