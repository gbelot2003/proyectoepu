<div class="input-field @if ($errors->has('name')) has-error @endif">
    {!! Form::text('name', null, ['class' => 'validate']) !!}
    <label for="name">Nombre</label>
    @if ($errors->has('name')) <span class="red-text">{{ $errors->first('name') }}</span> @endif

</div>

<div class="row">


        <div class="col m4 input-field">
            {!! Form::select('country_id', $country, null,  ['id' => 'country','class' => 'validate']) !!}
            <label for="country">País</label>
            @if ($errors->has('country_id')) <span class="red-text">{{ $errors->first('country_id') }}</span> @endif
        </div>

        <div class="col m4 input-field">
            {!! Form::select('institution_list[]', $instit, null, ['id' => 'institucion', 'class' => 'validate', 'multiple']) !!}
            <label for="right_list">Instit.</label>
            @if ($errors->has('institution_list')) <span class="red-text">{{ $errors->first('institution_list') }}</span> @endif
        </div>

        <div class="col m4 input-field">
            {!! Form::select('derechos_list[]', $right, null, ['id' => 'right', 'class' => 'validate', 'multiple']) !!}
            <label for="right_list">Tipo</label>
            @if ($errors->has('derechos_list')) <span class="red-text">{{ $errors->first('derechos_list') }}</span> @endif
        </div>


</div>

<div class="row">
    <div class="col m12">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

