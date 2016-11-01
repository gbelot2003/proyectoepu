<div class="form-group @if ($errors->has('name')) has-error @endif">
    <label for="name">Nombre</label>
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif

</div>

<div class="form-group @if ($errors->has('details')) has-error @endif">
    <label for="details">Detalles</label>
    {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
    @if ($errors->has('details')) <p class="help-block">{{ $errors->first('details') }}</p> @endif
</div>

{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}