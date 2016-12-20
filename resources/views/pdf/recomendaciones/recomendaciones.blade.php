@extends('layouts.pdf')
@section('content')

    <h5>Recomendación:</h5>
    <h2>{{ $recom->name }}</h2>

    <table class="table table-bordered">
        <caption>Generales</caption>
        <tr>
            <th>País :</th>
            <th>Recomendaciónes</th>
            <th>Numero de Calificaciones</th>
            <th>Promedio Total de Calificaciones</th>
            @if($recom->derechos->count())
                <th>Tipo de derecho</th>
            @endif
        </tr>
        <tr>
            <td>{{ $recom->countries->name }}</td>
            <td>{{ $recom->trecomendaciones->name }}</td>
            <td>{{ $recom->CountCalifica }}</td>
            <td>{{ round($recom->calulo, 1) }}</td>
            @if($recom->derechos->count())
               <td>
                   @foreach($recom->derechos as $type)
                       <ul>
                           <li>{{ $type->name }}</li>
                       </ul>
                   @endforeach
               </td>
            @endif
        </tr>
    </table>

    <br/>

    <table class="table table-bordered">
        <caption>Calificaciones Otorgadas en peridodo</caption>
        <tr>
            <th>Organización</th>
            <th>Calificación</th>
            <th>¿Documento de Respaldo Anexado?</th>
        </tr>
        @foreach($calificaciones as $item)
            <tr>
                <td>{{ $item->user->organizacion->name }}</td>
                <td><span class="red-text">{{ $item->calificacion }}</span></td>
                <td>
                    @if($item->documento_url)
                        Si
                    @else
                        No
                    @endif
                </td>
            </tr>
        @endforeach
    </table>


@stop