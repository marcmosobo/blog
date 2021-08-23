<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstName', 'Firstname:') !!}
    {!! Form::text('firstName', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Middlename Field -->
<div class="form-group col-sm-6">
    {!! Form::label('middleName', 'Middlename:') !!}
    {!! Form::text('middleName', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastName', 'Lastname:') !!}
    {!! Form::text('lastName', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Mobile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mobile', 'Mobile:') !!}
    {!! Form::text('mobile', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Lastlogin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastLogin', 'Lastlogin:') !!}
    {!! Form::text('lastLogin', null, ['class' => 'form-control','id'=>'lastLogin']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#lastLogin').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Intro Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('intro', 'Intro:') !!}
    {!! Form::textarea('intro', null, ['class' => 'form-control']) !!}
</div>

<!-- Profile Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('profile', 'Profile:') !!}
    {!! Form::textarea('profile', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Verified Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_verified', 'Email Verified:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('email_verified', 0) !!}
        {!! Form::checkbox('email_verified', '1', null) !!}
    </label>
</div>


<!-- Password Changed Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password_changed', 'Password Changed:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('password_changed', 0) !!}
        {!! Form::checkbox('password_changed', '1', null) !!}
    </label>
</div>


<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
</div>
