@extends('layouts.material')
@section('title', $recom->name)

@section('content')
    <div class="row">
        <div class="col m4">

            <ul class="collection with-header">
                <li class="collection-header"><h5>Generales</h5></li>
                <li class="collection-item"><span class="badge">{{ $recom->countries->name }}</span>país</li>
                <li class="collection-item"><span class="badge">{{ $recom->trecomendaciones->name }}</span>Recomendaciones</li>
                <li class="collection-item"><span class="badge chip">{{ $recom->CountCalifica }}</span>Numero de calificaciones</li>
                <li class="collection-item"><span class="badge chip {{ $recom->califica }}">{{ round($recom->calulo, 1) }}</span>Total de calificaciones</li>
            </ul>

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
            <div class="row">
               <div class="col s10 m10">
                <h6 class="bold">Calificaciones Otorgadas en peridodo</h6>
               </div>
               <div class="s2">
                   <a href="{{ URL::previous() }}" class="btn-floating btn-small waves-effect waves-light blue">
                       <i class="material-icons">reply</i>
                   </a>
               </div>
            </div>
            <h5>{{ $recom->name }}</h5>

            @if($calificaciones->count())
                <div class=" col m12 right-align">
                    <a href="/recomendaciones/pdf/{{ $recom->id }}" class="btn-floating btn-small waves-effect waves-light red darken-4">
                        <i class="material-icons">picture_as_pdf</i>
                    </a>
                </div>
            @endif

            <br>

            @if($calificaciones->count())
                <h6 class="bold">Calificaciones Otorgadas en peridodo</h6>
                <div class="rTable">
                    <div class="rTableRow">
                        <div class="rTableHead"><strong>Organización</strong></div>
                        <div class="rTableHead"><span class="bold">Calificación</span></div>
                        <div class="rTableCell"><span class="bold">Documento de Respaldo</span></div>
                        <div class="rTableHead">&nbsp;</div>
                    </div>

                    @foreach($calificaciones as $calificacion)
                        <div class="rTableRow">
                            <div class="rTableCell">{{ $calificacion->user->organizacion->name }}</div>

                            <div class="rTableCell"><span class="chip purple lighten-4">{{ $calificacion->calificacion }}</span></div>

                            <div class="rTableCell">
                                @if($calificacion->documento_url)
                                    <a href="{{ asset('documents') . '/' . $calificacion->documento_url }}">{{ $calificacion->documento_url }}</a>
                                @else
                                    N/A
                                @endif

                            </div>

                            <div class="rTableCell">
                                <a href="{{ url('recomendaciones/califecaciones/detail', $calificacion->id) }}">Leer...</a>
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