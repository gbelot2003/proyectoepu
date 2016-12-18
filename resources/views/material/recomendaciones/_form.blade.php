{!! Form::open(['action' => 'RecomendationController@search']) !!}

<div class="row">
    <div class="input-field col s12 m6">
        <select id="trec" name="trec" class="califica">
            <option value="" disabled selected>Clasificación de Recomendaciones</option>
            @foreach($trec as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <div class="input-field col s12 m3">
        <input id="first_name" name="name" type="text" class="validate">
        <label for="first_name">Recomendacion</label>
    </div>


    <div class="input-field col s12 m2">
        <select id="pais" name="pais" class="select2">
            <option value="" disabled selected>Seleccione el País</option>
            @foreach($pais as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <label>País</label>
    </div>
    <div class="input-field col s12 m3 ">
        <select id="tipo" name="tipo" class="select2">.
            <option value="" disabled selected>Tipo de derecho</option>
            @foreach($tipo as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <label>Típo</label>
    </div>
</div>

<div class="row">

    <div class="col m12">
        <input type="submit" class="btn">
        @if($search === true)
         <a class="btn" href="/recomendaciones">Reset</a>
        @endif
        <hr>
    </div>
</div>
{!! Form::close() !!}