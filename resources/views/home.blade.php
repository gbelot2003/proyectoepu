@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col m12">
            <h6>Benvenido {{ Auth::user()->name }}</h6>
        </div>
    </div>
@endsection
