@extends('layouts.app')
@section('title', "Agregar Organización")
@section('content')

    <h2>Registrar Organización</h2>
    {!! Form::open(array('route' => array('admin.organizaciones.store'), 'method' => 'POST')) !!}
    @include('admin.organizaciones._form')
    {!!  Form::close() !!}

@stop