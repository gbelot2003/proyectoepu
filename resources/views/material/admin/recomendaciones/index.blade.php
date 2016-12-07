@extends('layouts.material')
@section('title', 'Recomendaciones | Listado')

@section('content')
    <div class="row">
        <div class="col s12">
            <h3>Recomendaciones</h3>
            <form class="">
                <div class="input-field has-feedback">
                    <input type="text" class="form-control" name="search" id="search">
                    <label for="search" class="sr-only">Search</label>
                </div>
            </form>
        </div>

        <div class="col s12">
            <a href="{{ route('admin.recomendaciones.create') }}" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
            <table class="table hovered bordered">
                <thead>
                <tr>
                    <th>Listado de Recomendaciones</th>
                    <th>País</th>
                </tr>
                </thead>
                <tbody>
                @foreach($recom as $items)
                    <tr>
                        <td><a href="{{ action('AdminRecomendacionesController@edit', $items->id)  }}">{{ $items->name }}</a></td>
                        <td>{{ $items->countries->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col s12">
            @include('pagination.default', ['paginator' => $recom])
        </div>
    </div>


@stop