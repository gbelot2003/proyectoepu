@extends('layouts.material')
@section('title', $recom->name)

@section('content')
    <div class="row">
        <div class="col m4">
            <h6>Generales</h6>
            <div class="collection">
                <a href="#!" class="collection-item"><span class="badge">{{ $recom->countries->name }}</span>país</a>
                <a href="#!" class="collection-item"><span class="badge chip blue-text">{{ $recom->CountCalifica }}</span>Numero de calificaciones</a>
                <a href="#!" class="collection-item"><span class="badge chip {{ $recom->califica }}">{{ round($recom->calulo, 1) }}</span>Total de calificaciones</a>
            </div>

            @if($recom->derechos->count())
                <h6>Tipos de derecho</h6>
                <ul class="collection">
                    @foreach($recom->derechos as $type)
                        <li class="collection-item">{{ $type->name }}</li>
                    @endforeach
                </ul>
            @endif

            @if($recom->institutions->count())
                <h6>Instituciones Calificadoras</h6>
                <ul class="collection">
                    @foreach($recom->institutions as $institutions)
                        <li class="collection-item">{{ $institutions->name }}</li>
                    @endforeach
                </ul>
            @endif
        </div>


        <div class="col m8">
            <h6 class="bold">Calificaciones Otorgadas en peridodo</h6>
            <h5>{{ $recom->name }}</h5>
            <br>
            @if($calificaciones->count())
                <h6 class="bold">Calificaciones Otorgadas en peridodo</h6>
                <div class="rTable">
                    <div class="rTableRow">
                        <div class="rTableHead"><strong>Organización</strong></div>
                        <div class="rTableHead"><span style="font-weight: bold;">Calificación</span></div>
                        <div class="rTableCell"><span style="font-weight: bold;">Documento de Respaldo</span></div>
                        <div class="rTableHead">&nbsp;</div>
                    </div>

                    @foreach($calificaciones as $calificacion)
                        <div class="rTableRow">
                            <div class="rTableCell">{{ $calificacion->user->organizacion->name }}</div>
                            <div class="rTableCell"><span class="chip purple lighten-4">{{ $calificacion->calificacion }}</span></div>
                            <div class="rTableCell"><a class="" href="{{ asset('documents') . '/' . $calificacion->documento_url }}">{{ $calificacion->documento_url }}</a></div>
                            <div class="rTableCell">
                                <a href="{{ url('recomendaciones/califecaciones/detail', $calificacion->id) }}">Mas detalles...</a>
                                @if (!Auth::guest())
                                    @if (Auth::user()->hasRole(['super', 'admin', 'organiza']))
                                        | <a class="" href="{{ action('CalificacionController@edit', $calificacion->id) }}">Editar</a><br>
                                    @endif
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <h6 class="blue-text">No se a calificado esta recomendación</h6>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col m12">
            <hr>
        </div>
    </div>

@stop