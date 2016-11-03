@extends('layouts.app')
@section('title', $recom->name)
@section('content')
    <table class="table table-bordered">
        <caption>Detalles de Recomendación</caption>
        <tr>
            <th>Recomendación:</th>
            <td>{{ $recom->name }}</td>
        </tr>
        <tr>
            <th>Pais:</th>
            <td>
                {{ $recom->countries->name }}
            </td>
        </tr>
        <tr>
            <th>Tipo</th>
            <td>
                @foreach($recom->derechos as $type)
                    <li><span>{{ $type->name }}</span></li>
                @endforeach
            </td>
        </tr>
        <tr>
            <th>
                Instituciones;
            </th>
            <td>
                @foreach($recom->institutions as $institutions)
                    <span>{{ $institutions->name }}</span>
                @endforeach
            </td>
        </tr>
        <tr>
            <th>Numero de calificaciones</th>
            <td>{{ $recom->CountCalifica }}</td>
        </tr>
        <tr>
            <th>Calificación</th>
                <td>
                    <span class="{{ $recom->califica }}">{{ round($recom->calulo, 1) }}</span>
            </td>
        </tr>
    </table>
    <h5>Organizaciones Calificadoeas durante el periodo</h5>
    <hr>
    @foreach($recom->calificacion as $calificacion)
    <table class="table-bordered table">
            <tr>
                <th>Usuario / Organización</th>
                <td>{{ $calificacion->user->organizacion->name }}</td>
            </tr>
            <tr>
                <th>Calificación Otorgada</th>
                <td>{{ $calificacion->calificacion }}</td>
            </tr>
            <tr>
                <th>Descripción Corta de la calificación otorgada</th>
                <td>{{ $calificacion->details }}</td>
            </tr>
            <tr>
                <th>Documento de antecedente para calificar</th>
                <td>
                    <a href="public/documents/{{ $calificacion->documento_url }}">{{ $calificacion->documento_url }}</a>
                </td>
            </tr>
    </table>
    @endforeach
@stop