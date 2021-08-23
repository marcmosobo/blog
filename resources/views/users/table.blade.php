<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Password</th>
        <th>Lastlogin</th>
        <th>Intro</th>
        <th>Profile</th>
        <th>Email Verified</th>
        <th>Password Changed</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->firstName }}</td>
            <td>{{ $user->middleName }}</td>
            <td>{{ $user->lastName }}</td>
            <td>{{ $user->mobile }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->lastLogin }}</td>
            <td>{{ $user->intro }}</td>
            <td>{{ $user->profile }}</td>
            <td>{{ $user->email_verified }}</td>
            <td>{{ $user->password_changed }}</td>
            <td>{{ $user->remember_token }}</td>
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
