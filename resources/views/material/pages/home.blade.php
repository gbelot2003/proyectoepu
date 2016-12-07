@extends('layouts.material')

@section('content')
    <div class="row">
        <div class="col m12">
            <div class="row">
                <div class="col m4">
                    <h5>Mis Datos Generales</h5>
                    <div class="collection">
                        <a href="#!" class="collection-item">
                            <span class="badge">
                                @if(Auth::user()->status == 1)
                                    Activo
                                @else
                                    Suspendido
                                @endif
                            </span>
                            Estado
                        </a>

                        <a href="#!" class="collection-item"><span class="badge">
                                @foreach(Auth()->user()->roles() as $rol)
                                    {{ $rol->name }}
                                @endforeach
                            </span>
                            Permiso</a>
                        <a href="#!" class="collection-item"><span class="badge">
                                {{ Auth::user()->organizacion->name }}
                            </span>Organización</a>
                    </div>

                </div>
                <div class="col m8">
                    <h4>Benvenid@ <span>{{ Auth::user()->name }}</span></h4>
                    @if(Auth::user()->hasRole(['super', 'admin', 'organiza']))
                        <hr>
                        <h5>Ultimas Calificaciones</h5>
                        <div class="collection">
                            @foreach($califica as $item)
                                    <a href="#!" class="collection-item"><span class="badge red-text">{{ $item->calificacion }}%</span>{{ $item->recomendacion->name }}</a>
                            @endforeach
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
