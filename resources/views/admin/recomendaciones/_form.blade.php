<div class="form-group">
    <label for="name">Nombre</label>
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="country">País</label>
            {!! Form::select('country_id', $country, null,  ['id' => 'country','class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="institution_list">Institución</label>
            {!! Form::select('institution_list[]', $instit, null, ['id' => 'institucion', 'class' => 'form-control', 'multiple']) !!}
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="right_list">Tipo de Derecho</label>
            {!! Form::select('derechos_list[]', $right, null, ['id' => 'right', 'class' => 'form-control', 'multiple']) !!}
        </div>
    </div>
</div>

{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}