<div class="form-group @if ($errors->has('name')) has-error @endif">
    <label for="name">Nombre</label>
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif

</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group @if ($errors->has('country_id')) has-error @endif">
            <label for="country">País</label>
            {!! Form::select('country_id', $country, null,  ['id' => 'country','class' => 'form-control']) !!}
            @if ($errors->has('country_id')) <p class="help-block">{{ $errors->first('country_id') }}</p> @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group @if ($errors->has('institution_list')) has-error @endif"">
            <label for="institution_list">Institución</label>
            {!! Form::select('institution_list[]', $instit, null, ['id' => 'institucion', 'class' => 'form-control', 'multiple']) !!}
            @if ($errors->has('institution_list')) <p class="help-block">{{ $errors->first('institution_list') }}</p> @endif
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group @if ($errors->has('derechos_list')) has-error @endif"">
            <label for="right_list">Tipo de Derecho</label>
            {!! Form::select('derechos_list[]', $right, null, ['id' => 'right', 'class' => 'form-control', 'multiple']) !!}
            @if ($errors->has('derechos_list')) <p class="help-block">{{ $errors->first('derechos_list') }}</p> @endif
        </div>
    </div>
</div>

{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}