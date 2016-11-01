<div class="form-group @if ($errors->has('name')) has-error @endif">
    <label for="name">Nombre</label>
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
</div>

<div class="form-group @if ($errors->has('email')) has-error @endif">
    <label for="name">E-Mail</label>
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
</div>

<div class="row">
    <div class="col-md-6 col-sm-12">
        <!-- Password Form Input -->
        <div class="form-group">
            {!! Form::password("password", ['class' => 'form-control floating-label', 'placeholder' => 'Password']) !!}
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <!-- Repassword Form Input -->
        <div class="form-group">
            {!! Form::password("password_confirmation", ['class' => 'form-control floating-label', 'placeholder' => 'Re-password']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <!-- Rol Form Input -->
        <div class="form-group @if ($errors->has('roles_list')) has-error @endif">
            <label for="roles_list">Rol de Usuario</label>
            {!! Form::select('roles_lists[]', $roles, null, ['class' => 'select form-control', 'id' => 'roles_list', 'multiple']) !!}
            @if ($errors->has('roles_list')) <p class="help-block">{{ $errors->first('roles_list') }}</p> @endif
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group @if ($errors->has('organizacion_id')) has-error @endif">
            <label for="organizacion_id">Organización</label>
            {!! Form::select('organizacion_id', $organiza, null,  ['id' => 'country','class' => 'form-control']) !!}
            @if ($errors->has('organizacion_id')) <p class="help-block">{{ $errors->first('organizacion_id') }}</p> @endif
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group @if ($errors->has('status')) has-error @endif">
            <label for="status">Estado</label>
            {!! Form::select('status', $estado, null,  ['id' => 'country','class' => 'form-control']) !!}
            @if ($errors->has('status')) <p class="help-block">{{ $errors->first('status') }}</p> @endif
        </div>
    </div>

</div>



{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}