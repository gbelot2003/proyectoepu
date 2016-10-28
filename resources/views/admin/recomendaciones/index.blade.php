@extends('layouts.app')

@section('appt', 'Recom')
@section('controller', 'RecomendacionesController')
@section('scripts')

@stop
@section('content')

    <form class="">
        <div class="form-group">
            <label for="buscar" class="control-label">Buscar</label>
            <div class="">
                <input type="Buscar" class="form-control" id="buscar" placeholder="Buscar">
            </div>
        </div>
        <button type="submit" class="btn-primary btn"> Buscar</button>
    </form>
    <hr>

    <a href="{{ route('admin.recomendaciones.create') }}" class="btn btn-info"><i class="fa fa-btn fa-plus"></i> Nueva Recomendación</a>
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