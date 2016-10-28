@extends('layouts.app')
@section('title', "Editar")

@section('content')
    <h2>Edición de Recomendación</h2>
    {!! Form::model($rec, array('route' => array('admin.recomendaciones.update', $rec->id), 'method' => 'patch')) !!}
        @include('admin.recomendaciones._form')
    {!!  Form::close() !!}
@stop
