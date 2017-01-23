<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Nombre', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('name',old('name'),['class'=>'form-control','id'=>'name']) !!}

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Correo Electrónico', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::email('email',old('email'),['class'=>'form-control','id'=>'email']) !!}

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
    {!! Form::label('username', 'Usuario', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('username',old('username'),['class'=>'form-control','id'=>'username']) !!}

        @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    {!! Form::label('password', 'Contraseña', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::password('password',['class'=>'form-control','id'=>'password']) !!}

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    {!! Form::label('password-confirm', 'Confirmar Contraseña', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::password('password_confirmation',['class'=>'form-control','id'=>'password-confirm']) !!}

        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
    </div>
</div>