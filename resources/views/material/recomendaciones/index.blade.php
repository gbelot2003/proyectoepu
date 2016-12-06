@extends('layouts.material')
@section('title', 'Recomendaciones')

@section('content')
    <div class="row">
        <div class="col m12">
            <h3>Listado de recomendaciones EPU</h3>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m3">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Recomendacion</label>
        </div>


        <div class="input-field col s6 m2">
            <select id="pais" class="select2">
                <option value="0">N/A</option>
                @foreach($pais as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            <label>País</label>
        </div>
        <div class="input-field col s6 m3">
            <select id="tipo" class="select2">
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
            <label>Típo</label>
        </div>
    </div>


        @foreach($recom->chunk(3) as $mItem)
            <div class="row">
                @foreach($mItem as $item)
                    <div class="col m4 s12 z-depth-1 recomendacion">
                        <div class="title">{{ $item->name }}</div>
                        <div class="body">
                            <div class="row">
                                <div class="col s7">
                                    <table class="bordered">
                                        <tr>
                                            <th>País:</th>
                                            <td><a href="#">{{ $item->countries->name }}</a></td>
                                        </tr>
                                        <tr>
                                            <th>Tipo:</th>
                                            <td>
                                                <ul>
                                                    @foreach($item->derechos as $type)
                                                        <li style="list-style: circle">{{ $type->name }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col s5">
                                    <span class="{{ $item->califica }} calificacion">{{ round($item->calulo, 1) }}</span>
                                    @if (!Auth::guest())
                                        @if (Auth::user()->hasRole(['super', 'admin', 'organiza']))
                                            <a class="btn btn-info" href="{{ action('CalificacionController@califica', $item->id) }}">Calificar</a>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col m12">
            @include('pagination.default', ['paginator' => $recom])
        </div>
    </div>
@stop