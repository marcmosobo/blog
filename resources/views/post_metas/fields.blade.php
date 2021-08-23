<!-- Post Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_id', 'Post Id:') !!}
    {!! Form::number('post_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Key Field -->
<div class="form-group col-sm-6">
    {!! Form::label('key', 'Key:') !!}
    {!! Form::text('key', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('postMetas.index') }}" class="btn btn-default">Cancel</a>
</div>
