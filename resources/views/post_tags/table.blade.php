<div class="table-responsive">
    <table class="table" id="postTags-table">
        <thead>
            <tr>
                <th>Post Id</th>
        <th>Tag Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($postTags as $postTag)
            <tr>
                <td>{{ $postTag->post_id }}</td>
            <td>{{ $postTag->tag_id }}</td>
                <td>
                    {!! Form::open(['route' => ['postTags.destroy', $postTag->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('postTags.show', [$postTag->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('postTags.edit', [$postTag->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
