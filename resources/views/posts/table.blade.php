<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
            <tr>
                <th>Author Id</th>
        <th>Parent Id</th>
        <th>Title</th>
        <th>Metatitle</th>
        <th>Slug</th>
        <th>Summary</th>
        <th>Published</th>
        <th>Publishedat</th>
        <th>Content</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->author_id }}</td>
            <td>{{ $post->parent_id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->metaTitle }}</td>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->summary }}</td>
            <td>{{ $post->published }}</td>
            <td>{{ $post->publishedAt }}</td>
            <td>{{ $post->content }}</td>
                <td>
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('posts.show', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('posts.edit', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
