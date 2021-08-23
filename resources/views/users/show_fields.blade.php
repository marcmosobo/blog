<!-- Firstname Field -->
<div class="form-group">
    {!! Form::label('firstName', 'Firstname:') !!}
    <p>{{ $user->firstName }}</p>
</div>

<!-- Middlename Field -->
<div class="form-group">
    {!! Form::label('middleName', 'Middlename:') !!}
    <p>{{ $user->middleName }}</p>
</div>

<!-- Lastname Field -->
<div class="form-group">
    {!! Form::label('lastName', 'Lastname:') !!}
    <p>{{ $user->lastName }}</p>
</div>

<!-- Mobile Field -->
<div class="form-group">
    {!! Form::label('mobile', 'Mobile:') !!}
    <p>{{ $user->mobile }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $user->password }}</p>
</div>

<!-- Lastlogin Field -->
<div class="form-group">
    {!! Form::label('lastLogin', 'Lastlogin:') !!}
    <p>{{ $user->lastLogin }}</p>
</div>

<!-- Intro Field -->
<div class="form-group">
    {!! Form::label('intro', 'Intro:') !!}
    <p>{{ $user->intro }}</p>
</div>

<!-- Profile Field -->
<div class="form-group">
    {!! Form::label('profile', 'Profile:') !!}
    <p>{{ $user->profile }}</p>
</div>

<!-- Email Verified Field -->
<div class="form-group">
    {!! Form::label('email_verified', 'Email Verified:') !!}
    <p>{{ $user->email_verified }}</p>
</div>

<!-- Password Changed Field -->
<div class="form-group">
    {!! Form::label('password_changed', 'Password Changed:') !!}
    <p>{{ $user->password_changed }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $user->remember_token }}</p>
</div>

