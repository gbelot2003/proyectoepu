@extends('layouts.material')
@section('title', $recom->name)

@section('content')
    <div class="row">
        <div class="col m4">
            <h6>Generales</h6>
            <div class="collection">
                <a href="#!" class="collection-item"><span class="badge">{{ $recom->countries->name }}</span>país</a>
                <a href="#!" class="collection-item"><span class="badge blue-text">{{ $recom->CountCalifica }}</span>Numero de calificaciones</a>
                <a href="#!" class="collection-item"><span class="badge {{ $recom->califica }}">{{ round($recom->calulo, 1) }}</span>Total de calificaciones</a>
            </div>

            <h6>Tipos de derecho</h6>
            <ul class="collection">
                @foreach($recom->derechos as $type)
                    <li class="collection-item">{{ $type->name }}</li>
                @endforeach
            </ul>

            <h6>Instituciones Calificadoras</h6>
            <ul class="collection">
                @foreach($recom->institutions as $institutions)
                    <li class="collection-item">{{ $institutions->name }}</li>
                @endforeach
            </ul>


        </div>
        <div class="col m8">
            <h6>Recomendacion</h6>
            <h5>{{ $recom->name }}</h5>

            <br>


            <h6 class="blue-text">Calificaciones Otorgadas en peridodo</h6>
            <hr>
            @foreach($recom->calificacion as $calificacion)

                <div class="calificacion-result col s12">
                    <div class="row">
                        <div class="organizacion-name col s6">
                            <h6>Organización evaluadora</h6>
                            <span style="font-weight: bold">{{ $calificacion->user->organizacion->name }}</span>
                        </div>

                        <div class="col s6 organizacion-calificacion">
                                <h6>Calificación Otorgada</h6>
                                {{ $calificacion->calificacion }}
                        </div>
                        <div class="s12 organizacion-body">
                            <h6 style="font-weight: bold">Descripción y/o resumen de la calificación otorgada</h6>
                            <p>{{ $calificacion->details }}</p>
                        </div>
                        <div class="organizacion-file col s12">
                            <span style="font-weight: bold">Documento de antecedente :</span>
                            <a class="" href="{{ asset('documents') . '/' . $calificacion->documento_url }}">{{ $calificacion->documento_url }}</a>
                        </div>

                    </div>
                </div>
                <hr>
            @endforeach

        </div>
    </div>
    <div class="row">
        <div class="col m12">
            <hr>
        </div>
    </div>

@stop