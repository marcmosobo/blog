<div class="table-responsive">
    <table class="table" id="postComments-table">
        <thead>
            <tr>
                <th>Post Id</th>
        <th>Parent Id</th>
        <th>Title</th>
        <th>Published</th>
        <th>Published At</th>
        <th>Content</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($postComments as $postComment)
            <tr>
                <td>{{ $postComment->post_id }}</td>
            <td>{{ $postComment->parent_id }}</td>
            <td>{{ $postComment->title }}</td>
            <td>{{ $postComment->published }}</td>
            <td>{{ $postComment->published_at }}</td>
            <td>{{ $postComment->content }}</td>
                <td>
                    {!! Form::open(['route' => ['postComments.destroy', $postComment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('postComments.show', [$postComment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('postComments.edit', [$postComment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
