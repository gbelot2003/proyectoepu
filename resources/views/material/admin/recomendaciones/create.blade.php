@extends('layouts.material')
@section('title', "Nueva Recomendación")
@section('content')

    <h2>Nueva Recomendación</h2>
    {!! Form::open(array('action' => array('AdminRecomendacionesController@store'), 'method' => 'POST')) !!}
        @include('material.admin.recomendaciones._form')
    {!!  Form::close() !!}

@stop
