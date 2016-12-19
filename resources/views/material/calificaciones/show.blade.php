@extends('layouts.material')
@section('title', $recom->name)

@section('content')
    <div class="row">
        <div class="col m4">
            <h6>Generales</h6>
            <div class="collection">
                <a href="#!" class="collection-item"><span class="badge">{{ $calificacion->calificacion }}</span>Calificación</a>
                <a href="#!" class="collection-item"><span class="badge ">{{ $calificacion->user->organizacion->name }}</span>Organizacion Calificadora</a>
            </div>

            @if($calificacion->documento_url)
            <ul class="collection">
                <li class="collection-item">
                    <span class="title">Documento de Respaldo</span>
                    <p><a href="{{ $calificacion->documento_url }}">{{ $calificacion->documento_url }}</a>
                    </p>
                </li>
            </ul>
            @endif

            @if($recom->derechos->count())
                <h6>Tipos de derecho</h6>
                <ul class="collection">
                    @foreach($recom->derechos as $type)
                        <li class="collection-item">{{ $type->name }}</li>
                    @endforeach
                </ul>
            @endif
        </div>


        <div class="col m8">
            <br>
            <a href="{{ url('recomendaciones/show', $recom->id) }}" class="btn-floating btn-large waves-effect waves-light blue">
                <i class="material-icons">reply</i>
            </a>
            <h5>{{ $recom->name }}</h5>
            <br>
            <div>
                <p><span class="bold">Explicación</span></p>
                {!! $calificacion->details !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col m12">
            <hr>
        </div>
    </div>

@stop