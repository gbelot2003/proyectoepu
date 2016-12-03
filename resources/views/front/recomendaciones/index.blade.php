@extends('layouts.app')
@section('title', 'Recomendaciones')

@section('content')
    <div class="row">
        @foreach($recom as $item)
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">{{ $item->name }}</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table">
                                <tr>
                                    <th>País:</th>
                                    <td><a href="#">{{ $item->countries->name }}</a></td>
                                </tr>
                                <tr>
                                    <th>Tipo:</th>
                                    <td>
                                        @foreach($item->derechos as $type)
                                            <span>{{ $type->name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <span class="{{ $item->califica }} calificacion">{{ round($item->calulo, 1) }}</span>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    @if (!Auth::guest())
                        @if (Auth::user()->hasRole(['super', 'admin', 'organiza']))
                            <a class="btn btn-info" href="{{ action('CalificacionController@califica', $item->id) }}">Calificar</a>
                        @endif
                    @endif
                    <a class="btn btn-primary" href="{{ action('RecomendationController@show', $item->id) }}">Leer mas</a>
                </div>

            </div>
        </div>
        @endforeach
    </div>
@stop