<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name') !!}
    <div class="form-controls">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}

        @if ($errors->has('name'))
            <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    {!! Form::label('password', 'Password') !!}
    <div class="form-controls">
        {!! Form::password('password', ['class' => 'form-control']) !!}

        @if ($errors->has('password'))
            <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    {!! Form::label('password_confirmation', 'Confirm Password') !!}
    <div class="form-controls">
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

        @if ($errors->has('password_confirmation'))
            <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="form-controls">
        {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

