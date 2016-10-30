@extends('layouts.app')
@section('title', 'Usuarios')

@section('content')
    <form class="">
        <div class="form-group has-feedback">
            <label for="search" class="sr-only">Search</label>
            <input type="text" class="form-control" name="search" id="search" placeholder="search">
            <span class="glyphicon glyphicon-search form-control-feedback"></span>
        </div>
    </form>
    <hr>
    <a href="{{ route('admin.recomendaciones.create') }}" class="btn btn-info"><i class="fa fa-btn fa-user"></i>Registrar Usuario</a>
    <hr>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>

            <tr>
                <th>Nombre</th>
                <th>E-mail</th>
                <th>Rol(es)</th>
                <th>Estado</th>
            </tr>

            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td><a href="{{ action('UserController@edit', $user->id)  }}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>

                    </td>

                    <td>
                        @if($user->status === 1)
                            <span>Activo</span>
                        @else()
                            <span>Suspendido</span>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{--{{ $recom->links() }}--}}
    </div>
    <div>
    </div>

@stop