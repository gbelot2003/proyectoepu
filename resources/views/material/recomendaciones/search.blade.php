@extends('layouts.material')
@section('title', 'Recomendaciones')

@section('content')

    <div class="row">
        <div class="col m12">
            <h3>Listado de recomendaciones EPU</h3>
        </div>
    </div>
    @include('material.recomendaciones._form')
    @include('material.recomendaciones._body')
@stop