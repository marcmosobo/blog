<!-- Post Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_id', 'Post Id:') !!}
    {!! Form::number('post_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tag Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tag_id', 'Tag Id:') !!}
    {!! Form::number('tag_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('postTags.index') }}" class="btn btn-default">Cancel</a>
</div>
