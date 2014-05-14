@extends('usuarios::base')
@section('title')
Inicio de sesion
@stop
@section('cuerpo')
<h1 class="texto-centrado">Inicio de sesión</h1>

@if (Session::get('errores'))
<div class="alert alert-danger">
    <ul>
    <li>{{ Session::get('errores') }}</li>
    </ul>
</div>
@endif

{{ Form::open(array('route' => 'login','role' => 'form', 'class' => 'well well-lg', 'id' => 'formulario-login')) }}
<div class="form-group">
    {{ Form::label('usuario', 'Usuario') }}
    {{ Form::text('usuario',null,array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('password', 'Password') }}
{{ Form::password('password',array('class' => 'form-control')) }}
</div>

{{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-lg')) }}

{{ Form::close() }}

@stop
