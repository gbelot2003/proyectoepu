@extends('layouts.material')
@section('title', 'Usuarios')

@section('content')
    <div class="row">
        <div class="col s12">
            <h3>Usuarios</h3>
            {!! Form::open(['action' => 'UserController@search']) !!}
            <div class="input-field">
                <input type="text" name="name" id="search">
                <label for="search" >Busqueda</label>
            </div>
            </form>
        </div>

        <div class="col s12">
            <a href="{{ route('admin.users.create') }}" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a><br>
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
                            @foreach($user->roles as $roles)
                                <li>{{ $roles->name }}</li>
                            @endforeach
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
        </div>
        <div class="col s12">
            @include('pagination.default', ['paginator' => $users])
        </div>

    </div>
@stop