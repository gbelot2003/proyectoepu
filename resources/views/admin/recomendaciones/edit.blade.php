@extends('layouts.app')
@section('title', "Editar")

@section('content')
    <form action="{{ action('AdminRecomendacionesController@update') }}" method="patch">
        
    </form>
@stop
