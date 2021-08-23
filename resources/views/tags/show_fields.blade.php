<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $tag->title }}</p>
</div>

<!-- Metatitle Field -->
<div class="form-group">
    {!! Form::label('metaTitle', 'Metatitle:') !!}
    <p>{{ $tag->metaTitle }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $tag->slug }}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $tag->content }}</p>
</div>

