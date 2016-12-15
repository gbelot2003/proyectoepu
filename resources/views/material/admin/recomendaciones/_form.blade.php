<div class="input-field @if ($errors->has('name')) has-error @endif">
    {!! Form::text('name', null, ['class' => 'validate']) !!}
    <label for="name">Nombre <span class="red-text">*</span></label>
    @if ($errors->has('name')) <span class="red-text">{{ $errors->first('name') }}</span> @endif
</div>

<div class="row">

    <div class="col m3 input-field">
        {!! Form::select('country_id', $country, null,  ['id' => 'country','class' => 'validate']) !!}
        <label for="country">País <span class="red-text">*</span></label>
        @if ($errors->has('country_id')) <span class="red-text">{{ $errors->first('country_id') }}</span> @endif
    </div>

    <div class="col m3 input-field">
        {!! Form::select('typeofrecomendations_id', $trec, null, ['id' => 'trecomendacion', 'class' => 'califica validate']) !!}
        <label for="right_list">F. R. <span class="red-text">*</span></label>
        @if ($errors->has('typeofrecomendations_id')) <span class="red-text">{{ $errors->first('typeofrecomendations_id') }}</span> @endif
    </div>

    <div class="col m3 input-field">
        {!! Form::select('derechos_list[]', $right, null, ['id' => 'right', 'class' => 'validate', 'multiple']) !!}
        <label for="right_list">Tipo <span class="red-text">*</span></label>
        @if ($errors->has('derechos_list')) <span class="red-text">{{ $errors->first('derechos_list') }}</span> @endif
    </div>

    <div class="col m3 input-field">
        {!! Form::select('institution_list[]', $instit, null, ['id' => 'institucion', 'class' => '', 'multiple']) !!}
        <label for="right_list">Instit.</label>
        @if ($errors->has('institution_list')) <span class="red-text">{{ $errors->first('institution_list') }}</span> @endif
    </div>

</div>

<div class="row">
    <div class="col m12">
        <label for="details">Detalles de la Recomendación</label>
        {!! Form::textarea('details', null, ['class' => 'ckeditor']) !!}
    </div>
</div>

<div class="row">
    <div class="col m12">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
        <a href="/admin/recomendaciones" class="btn btn-flat">Regresar</a>
    </div>
</div>

