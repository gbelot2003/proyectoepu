@extends('layouts.material')
@section('title', $recom->name)

@section('content')
    <div class="row">
        <div class="col m4">

            <ul class="collection with-header">
                <li class="collection-header"><h5>Generales</h5></li>
                <li class="collection-item"><span class="badge">{{ $calificacion->calificacion }}</span>Calificación</li>
                <li class="collection-item"><span class="badge ">{{ $calificacion->user->organizacion->name }}</span>Organizacion Calificadora</li>
            </ul>

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

            <div class="row">
                <div class="col s10">
                </div>
                <div class="col s2">
                    <a href="{{ URL::previous() }}" class="btn-floating btn-small waves-effect waves-light blue">
                        <i class="material-icons">reply</i>
                    </a>
                </div>
             </div>
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