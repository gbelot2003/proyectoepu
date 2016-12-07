@extends('layouts.material')
@section('title', 'Listado de Organizaciones Aliadas')

@section('content')
    <h3>Organizaciones Aliadas</h3>
    <p>Listado de las organizaciones aliadas y evaluadoras</p>
    <hr>


    <div class="collection">
        @foreach($items as $item)
            <a href="{{ $item->url }}" class="collection-item">{{ $item->name }}</a>
        @endforeach
    </div>


@stop

