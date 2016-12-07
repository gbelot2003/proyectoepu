@extends('layouts.material')
@section('title', "Editar")

@section('content')
    <h2>Edición de Organización</h2>
    {!! Form::model($organizacion, array('route' => array('admin.organizaciones.update', $organizacion->id), 'method' => 'patch')) !!}
    @include('material.admin.organizaciones._form')
    {!!  Form::close() !!}
@stop
