@extends('layouts.app')
@section('title', 'Calificar')

@section('content')
    <div class="well">
        <h2>Calificar</h2>
        <h3>{{ $recom->name }}</h3>
    </div>

    {!! Form::open(array('route' => array('recomendaciones.califecaciones.store'), 'files' => 'true')) !!}

        {!! Form::hidden('recomendacion_id', $recom->id) !!}

        <div class="row">

            <div class="col-md-4">
                <div class="form-group @if ($errors->has('calificacion')) has-error @endif">
                    <label for="status">Archivo:</label>
                    {!! Form::select('calificacion', $califica, null,  ['id' => 'country','class' => 'form-control']) !!}
                    @if ($errors->has('calificacion')) <p class="help-block">{{ $errors->first('calificacion') }}</p> @endif
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group @if ($errors->has('documento')) has-error @endif">
                    <label for="status">Calificar:</label>
                    {!! Form::file('documento', null,  ['id' => 'country','class' => 'form-control']) !!}
                    @if ($errors->has('documento')) <p class="help-block">{{ $errors->first('documento') }}</p> @endif
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group @if ($errors->has('details')) has-error @endif">
                    <label for="details">Descripción :</label><br>
                    <span class="green">Descripción corta de la calificación</span>
                    {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('details')) <p class="help-block">{{ $errors->first('details') }}</p> @endif
                </div>
            </div>

        </div>

    <hr>
    {{ Form::submit('Calificar',  ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@stop