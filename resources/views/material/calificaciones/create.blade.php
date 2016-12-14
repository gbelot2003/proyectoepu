@extends('layouts.material')
@section('title', 'Calificar')

@section('content')
    <div class="valign-wrapper">
        <div class="valign">
            <h2>Calificar</h2>
            <h5>{{ $recom->name }}</h5>
        </div>
    </div>

    {!! Form::open(array('route' => array('recomendaciones.califecaciones.store'), 'files' => 'true')) !!}

    {!! Form::hidden('recomendacion_id', $recom->id) !!}

    <div class="row">

        <div class="col m4">
            <div class="input-field @if ($errors->has('calificacion')) has-error @endif">
                {!! Form::select('calificacion', $califica, null,  ['class' => 'califica validate']) !!}
                <label for="status">Calificación:</label>
            @if ($errors->has('calificacion')) <p class="help-block red-text">{{ $errors->first('calificacion') }}</p> @endif
            </div>
        </div>

        <div class="col m4">
            <div class="input-field @if ($errors->has('documento')) has-error @endif">
                <label for="status">Calificar:</label>

                <div class="file-field input-field">
                    <div class="btn">
                        <span>Archivo</span>
                        <input type="file" name="documento" class="validate">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                @if ($errors->has('documento')) <p class="red-text help-block">{{ $errors->first('documento') }}</p> @endif
            </div>
        </div>

        <div class="col m12">
            <div class="input-field @if ($errors->has('details')) has-error @endif">
                {!! Form::textarea('details', null, ['class' => 'ckeditor validate']) !!}
            @if ($errors->has('details')) <p class="red-text help-block">{{ $errors->first('details') }}</p> @endif
            </div>
        </div>

    </div>

    {{ Form::submit('Calificar',  ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@stop