<!-- Parent Id Field -->
<div class="form-group">
    {!! Form::label('parent_id', 'Parent Id:') !!}
    <p>{{ $category->parent_id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $category->title }}</p>
</div>

<!-- Metatitle Field -->
<div class="form-group">
    {!! Form::label('metaTitle', 'Metatitle:') !!}
    <p>{{ $category->metaTitle }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $category->slug }}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $category->content }}</p>
</div>

