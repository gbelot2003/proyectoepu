@extends('layouts.material')
@section('title', 'Listado de Instituciones de Gubernamentales')

@section('content')
    <h3>Listado de Instituciones de Gubernamentales</h3>
    <p>Listado con las instituciones gubernamentales evaluadas en la plataforma</p>
    <hr>


    <div class="collection">
        @foreach($items as $item)
        <a href="{{ $item->url }}" class="collection-item">{{ $item->name }}</a>
        @endforeach
    </div>


@stop

