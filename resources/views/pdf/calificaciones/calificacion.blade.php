@extends('layouts.pdf')
@section('content')
    <h5>Detalles de recomendación</h5>
    <h2>{{ $recom->name }}</h2>

    <table width="45%" class="table table-bordered">
        <caption>Generales</caption>
        <tr>
            <th>Calificación Otorgada</th>
            <th>Organización Calificadora</th>
        </tr>
        <tr>
            <td>{{ $calificacion->calificacion }}</td>
            <td>{{ $calificacion->user->organizacion->name }}</td>
        </tr>

    </table>
    <hr>
        <h5>Análisis de Calificación</h5>
        {!! $calificacion->details !!}

@stop