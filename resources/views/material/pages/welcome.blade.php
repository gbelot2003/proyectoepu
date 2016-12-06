@extends('layouts.material')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col m10 offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        @foreach($type as $type)
                            <li> {{ $type->name }} - {{ $type->CountRel }}</li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
