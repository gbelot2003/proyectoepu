@extends('layouts.material')
@section('title', "Editar")

@section('content')
    <h2>Edición de Recomendación</h2>
    {!! Form::model($user, array('route' => array('admin.users.update', $user->id), 'method' => 'patch')) !!}
    @include('material.admin.users._form')
    {!!  Form::close() !!}
@stop
