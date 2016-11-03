@extends('layouts.app')
@section('title', 'Recomendaciones')

@section('content')
    <div class="row">
        @foreach($recom as $item)
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $item->name }}</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="{{ $item->califica }} calificacion">{{ round($item->calulo, 1) }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <p>
                                <span>País:</span>
                                <a href="#">{{ $item->countries->name }}</a>
                            </p>

                            <span style="display: block">Tipo:</span>
                            @foreach($item->derechos as $type)
                                <span>{{ $type->name }}</span>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-primary" href="{{ action('CalificacionController@califica', $item->id) }}">Calificar</a>
                    <a class="btn" href="{{ action('RecomendationController@show', $item->id) }}">Leer mas</a>
                </div>

            </div>
        </div>
        @endforeach
    </div>
@stop