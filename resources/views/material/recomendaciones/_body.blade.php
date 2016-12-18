@foreach($recom->chunk(3) as $mItem)
    <div class="row">
        @foreach($mItem as $item)
            <div class="col m4 s12 z-depth-1 recomendacion">
                <div class="title">{{ $item->name }}</div>
                <div class="body">
                    <div class="row">
                        <div class="col s12 text-center">
                            <span class="{{ $item->califica }} calificacion">{{ round($item->calulo, 1) }}</span>
                            <div class="center-align">

                                @if (!Auth::guest())
                                    @if (Auth::user()->hasRole(['super', 'admin', 'organiza']))
                                        <a class="btn red white-text waves-effect" href="{{ action('CalificacionController@califica', $item->id) }}">Calificar</a>
                                    @endif
                                @endif

                            </div>
                        </div>
                        <div class="col s12">
                            <table class="bordered">
                                <tr>
                                    <th>País:</th>
                                    <td>{{ $item->countries->name }}</td>
                                </tr>
                                <tr>
                                    <th>Tipo:</th>
                                    <tr>
                                    <td colspan="2">
                                        @foreach($item->derechos as $type)
                                            <div style="font-size: 0.6rem" class="chip">{{$type->name }}</div>
                                        @endforeach

                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <th>Recomendaciones:</th>
                                    <td>
                                        <span class="chip green-text">{{ $item->trecomendaciones->name }}</span>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col m12">
                            <hr>
                            <a class="btn blue waves-effect waves-light white-text" href="{{ action('RecomendationController@show', $item->id) }}">Ver detalles..</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endforeach