@extends('layouts.app')
@section('title', 'Recomendaciones | Listado')

@section('content')
    <form class="">
        <div class="form-group has-feedback">
            <label for="search" class="sr-only">Search</label>
            <input type="text" class="form-control" name="search" id="search" placeholder="search">
            <span class="glyphicon glyphicon-search form-control-feedback"></span>
        </div>
    </form>
    <hr>

    <a href="{{ route('admin.recomendaciones.create') }}" class="btn btn-info"><i class="fa fa-btn fa-plus"></i> Nueva Recomendación</a>
    <hr>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>

            <tr>
                <th>Recomendacion</th>
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
        {{ $recom->links() }}
    </div>
    <div>
    </div>
@stop