<!-- Author Id Field -->
<div class="form-group">
    {!! Form::label('author_id', 'Author Id:') !!}
    <p>{{ $post->author_id }}</p>
</div>

<!-- Parent Id Field -->
<div class="form-group">
    {!! Form::label('parent_id', 'Parent Id:') !!}
    <p>{{ $post->parent_id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $post->title }}</p>
</div>

<!-- Metatitle Field -->
<div class="form-group">
    {!! Form::label('metaTitle', 'Metatitle:') !!}
    <p>{{ $post->metaTitle }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $post->slug }}</p>
</div>

<!-- Summary Field -->
<div class="form-group">
    {!! Form::label('summary', 'Summary:') !!}
    <p>{{ $post->summary }}</p>
</div>

<!-- Published Field -->
<div class="form-group">
    {!! Form::label('published', 'Published:') !!}
    <p>{{ $post->published }}</p>
</div>

<!-- Publishedat Field -->
<div class="form-group">
    {!! Form::label('publishedAt', 'Publishedat:') !!}
    <p>{{ $post->publishedAt }}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $post->content }}</p>
</div>

