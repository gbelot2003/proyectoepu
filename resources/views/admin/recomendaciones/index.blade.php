@extends('layouts.app')

@section('appt', 'Recom')
@section('controller', 'RecomendacionesController')
@section('scripts')
    <script src="{{ asset('js/recomendaciones.js') }}"></script>
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

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>Recomendacion</th>
                <th>País</th>
            </tr>
            </thead>
            <tbody>
            <tr ng-repeat="items in recom">
                <td><a href="/admin/recomendaciones/create">@{{ items.name }}</a></td>
                <td>@{{ items.countries.name }}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div>
    </div>
@stop