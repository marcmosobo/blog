<div class="table-responsive">
    <table class="table" id="postMetas-table">
        <thead>
            <tr>
                <th>Post Id</th>
        <th>Key</th>
        <th>Content</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($postMetas as $postMeta)
            <tr>
                <td>{{ $postMeta->post_id }}</td>
            <td>{{ $postMeta->key }}</td>
            <td>{{ $postMeta->content }}</td>
                <td>
                    {!! Form::open(['route' => ['postMetas.destroy', $postMeta->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('postMetas.show', [$postMeta->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('postMetas.edit', [$postMeta->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
