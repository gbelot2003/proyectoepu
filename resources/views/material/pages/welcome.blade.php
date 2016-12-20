@extends('layouts.material')

@section('img_portada')
    {{--<img src="{{ asset('images/cropped-honduras.jpg') }}" alt="Epu Honduras" style="width: 100%">--}}
    <div class="carousel carousel-slider center" data-indicators="true">

        <div class="carousel-item red white-text imageback1" href="#one!">
            <h2>Coalición contra la Impunidad</h2>
            <p class="white-text">Una lucha colectiva</p>
            <div class="carousel-fixed-item center">
                <a class="btn waves-effect white grey-text darken-text-2">Calificar Recomendaciones</a>
            </div>
        </div>

        <div class="carousel-item red white-text imageback2" href="#two!">
            <h2>La corrupción la pagamos todos</h2>
            <p class="white-text">Una lucha colectiva</p>
            <div class="carousel-fixed-item center">
                <a class="btn waves-effect white grey-text darken-text-2">Recomendaciones</a>
            </div>
        </div>

    </div>
@stop
@section('content')

@endsection
