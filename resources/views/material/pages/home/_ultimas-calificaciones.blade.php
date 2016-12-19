@if(Auth::user()->hasRole(['organiza']))

<h6 class="bold">Calificaciones Otorgadas en peridodo</h6>
<div class="rTable">
    <div class="rTableRow">
        <div class="rTableHead"><strong>Recomendación</strong></div>
        <div class="rTableHead"><span class="bold">Calificación</span></div>
        <div class="rTableCell"><span class="bold">Tipo Recomendación</span></div>
        <div class="rTableHead"><span class="bold">Estado</span></div>
    </div>
    @foreach($califica as $item)
        <div class="rTableHead">
            <a href="/recomendaciones/show/{{ $item->recomendacion->id }}">{{ $item->recomendacion->name }}</a>
        </div>
        <div class="rTableHead">{{ $item->calificacion }}</div>
        <div class="rTableHead">{{ $item->recomendacion->id }}</div>
        <div class="rTableHead">
            @if($item->status == 0)
                <span class="red-text">Sin Aprobar</span>
            @else
                <span class="green-text">Aprobada</span>
            @endif
        </div>
    @endforeach
</div>
@endif

@if(Auth::user()->hasRole(['super', 'admin']))
    <h6 class="bold">Calificaciones de Organizaciones en peridodo</h6>
    @foreach($acalifica as $item)
        <div class="rTableBody">
            <div class="rTableCell">
                    <a href="/recomendaciones/show/{{ $item->recomendacion->id }}">{{ $item->recomendacion->name }}</a>
            </div>
            <div class="rTableCell">{{ $item->calificacion }}</div>
            <div class="rTableCell">{{ $item->user->organizacion->name }}</div>
            <div class="rTableCell">
                @if($item->status == 0)
                    <a href="{{ route('admin.calificaciones.edit', $item->id) }}"><span class="red-text">Sin Aprobar</span></a>
                @else
                    <a href="route('admin.calificaciones.edit', $item->id)"><span class="green-text">Aprobada</span></a>
                @endif
            </div>
        </div>
    @endforeach
@endif

