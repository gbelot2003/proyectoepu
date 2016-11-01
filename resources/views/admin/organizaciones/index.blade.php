@extends('layouts.app')
@section('title', 'Organizaciones')

@section('content')
    <form class="">
        <div class="form-group has-feedback">
            <label for="search" class="sr-only">Search</label>
            <input type="text" class="form-control" name="search" id="search" placeholder="search">
            <span class="glyphicon glyphicon-search form-control-feedback"></span>
        </div>
    </form>
    <hr>
    <a href="{{ route('admin.organizaciones.create') }}" class="btn btn-info"><i class="fa fa-btn fa-user"></i>Registrar Organización</a>
    <hr>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>

            <tr>
                <th>Nombre</th>
                <th>Detalles</th>
            </tr>

            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td><a href="{{ action('OrganizacionesController@edit', $item->id)  }}">{{ $item->name }}</a></td>
                    <td>{{ $item->details }}</td>
            @endforeach
            </tbody>
        </table>
        {{ $items->links() }}
    </div>
    <div>
    </div>

@stop