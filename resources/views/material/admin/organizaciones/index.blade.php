@extends('layouts.material')
@section('title', 'Organizaciones')

@section('content')
    <div class="row">
        <div class="col s12">
            <h3>Organizaciones</h3>
            {!! Form::open(['action' => 'OrganizacionesController@search']) !!}
                <div class="input-field">
                    <input type="text" name="name" id="search">
                    <label for="search" >Busqueda</label>
                </div>
            </form>
        </div>

        <div class="col s12">
            <a href="{{ route('admin.organizaciones.create') }}"  class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a><br>
        </div>

        <div class="col s12">
                <table class="responsive-table">
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

        </div>
        <div class="col s12">
            @include('pagination.default', ['paginator' => $items])

        </div>

    </div>



    <div>
    </div>

@stop