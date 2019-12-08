<div class="form-group">
    {!!Form::label('location', 'Location Name', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('location', null, array('class' => 'form-control', 'id'=>'location'))!!}
        @if($errors ?? '')
            {!! $errors ?? '' ?? ''->first('location', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors ?? '' ?? ''->has('description')) {{'has-error'}} @endif">
    {!!Form::label('description', 'Description', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::textarea('description', null, array('class' => 'form-control', 'id'=>'description'))!!}
        @if($errors ?? '' ?? ''->has('description'))
            {!! $errors ?? '' ?? ''->first('description', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors ?? '' ?? ''->has('slug')) {{'has-error'}} @endif">
    {!!Form::label('slug', 'Slug', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::text('slug', null, array('class' => 'form-control', 'id'=>'slug'))!!}
        @if($errors ?? '' ?? ''->has('slug'))
            {!! $errors ?? '' ?? ''->first('slug', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group @if($errors ?? '' ?? ''->has('slug')) {{'has-error'}} @endif">
    {!!Form::label('image_id', 'Image ID', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!!Form::number('image_id', null, array('class' => 'form-control', 'id'=>'image_id'))!!}
        @if($errors ?? '' ?? ''->has('slug'))
            {!! $errors ?? '' ?? ''->first('slug', '<label class="control-label"
                                                   for="inputError">:message</label>') !!}
        @endif
    </div>
</div>

<div class="form-group">
    {!!Form::label('is_featured', 'Is Featured', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <strong>No </strong>
        <label class="switch">
            {!! Form::checkbox('is_featured', 1, null) !!}
            <span class="slider round"></span>
        </label>
        <strong>Yes </strong>
    </div>
</div>
