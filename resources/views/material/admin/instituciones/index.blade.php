@extends('layouts.material')
@section('title', 'Instituciones')

@section('content')
    <div class="row">
        <div class="col s12">
            <h3>Instituciones de Gobierno</h3>
            {!! Form::open(['action' => 'OrganizacionesController@search']) !!}
            <div class="input-field">
                <input type="text" name="name" id="search">
                <label for="search" >Busqueda</label>
            </div>
            </form>
        </div>

        <div class="col s12">
                {{--<a href="{{ route('admin.institucion.create') }}"  class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a><br>--}}
        </div>

        <div class="col s12">
            <table class="responsive-table bordered">
                <thead>

                <tr>
                    <th>Nombre</th>
                    <th>Resumen</th>
                    <th>Website</th>
                </tr>

                </thead>
                <tbody>
                @foreach($insti as $item)
                    <tr>
                        <td><a href="{{ action('OrganizacionesController@edit', $item->id)  }}">{{ $item->name }}</a></td>
                        <td>{{ $item->details }}</td>
                        <td><a href="{{ $item->url }}">{{ $item->url }}</a></td>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="col s12">
            @include('pagination.default', ['paginator' => $insti])

        </div>

    </div>



    <div>
    </div>

@stop