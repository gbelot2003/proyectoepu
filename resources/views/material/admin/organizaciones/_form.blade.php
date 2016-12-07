<div class="input-field @if ($errors->has('name')) has-error @endif">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    <label for="name">Nombre</label>
@if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif

</div>

<div class="input-field @if ($errors->has('details')) has-error @endif">
    <label for="details">Detalles</label>
    {!! Form::textarea('details', null, ['class' => 'materialize-textarea']) !!}
    @if ($errors->has('details')) <p class="help-block">{{ $errors->first('details') }}</p> @endif
</div>

{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}