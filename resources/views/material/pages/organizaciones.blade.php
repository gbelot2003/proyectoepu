@extends('layouts.material')
@section('title', 'Listado de Organizaciones Aliadas')

@section('content')
    <h3>Organizaciones Aliadas</h3>
    <p>Directorio de las organizaciones aliadas y evaluadoras</p>
    <hr>

    @foreach($items->chunk(3) as $mItem)
    <div class="row">
        @foreach($mItem as $item)
            <div class="col s12 m4">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">{{ $item->name }}</span>
                        <p>{{ $item->details }}</p>
                    </div>
                    <div class="card-action">
                        @if($item->url)
                        <a href="{{ $item->url }}" target="_blank">Página Web</a>
                        @else
                            <span>N/A</span>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endforeach

    <div class="row">
        <div class="col m12 center-align grey lighten-3">
            @include('pagination.default', ['paginator' => $items])
        </div>
    </div>
@stop


