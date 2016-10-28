@extends('layouts.app')
@section('title', "Nueva Recomendación")
@section('content')

    <h2>Nueva Recomendación</h2>
    {!! Form::model(array('route' => array('admin.recomendaciones.store'))) !!}
        @include('admin.recomendaciones._form')
    {!!  Form::close() !!}

@stop