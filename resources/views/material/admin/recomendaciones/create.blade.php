@extends('layouts.material')
@section('title', "Nueva Recomendación")
@section('content')

    <h2>Nueva Recomendación</h2>
    {!! Form::open(array('route' => array('admin.recomendaciones.store'), 'method' => 'POST')) !!}
    @include('material.admin.recomendaciones._form')
    {!!  Form::close() !!}

@stop