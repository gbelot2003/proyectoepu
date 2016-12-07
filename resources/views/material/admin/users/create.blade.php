@extends('layouts.material')
@section('title', "Registrar Usuario")
@section('content')

    <h2>Registrar nuevo usuario</h2>
    {!! Form::open(array('route' => array('admin.users.store'), 'method' => 'POST')) !!}
    @include('material.admin.users._form')
    {!!  Form::close() !!}

@stop)