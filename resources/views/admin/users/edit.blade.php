@extends('layouts.app')
@section('title', "Editar")

@section('content')
    <h2>Edición de Recomendación</h2>
    {!! Form::model($user, array('route' => array('admin.users.update', $user->id), 'method' => 'patch')) !!}
    @include('admin.users._form')
    {!!  Form::close() !!}
    <hr>
@stop
