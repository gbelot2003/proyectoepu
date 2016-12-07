@extends('layouts.material')
@section('title', "Editar")

@section('content')
    <h2>Edición de Recomendación</h2>
    {!! Form::model($recomendation, array('route' => array('admin.recomendaciones.update', $recomendation->id), 'method' => 'patch')) !!}
    @include('material.admin.recomendaciones._form')
    {!!  Form::close() !!}
@stop
