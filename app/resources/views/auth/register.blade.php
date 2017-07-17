@extends('layouts.master')

@include('layouts.navbar')

@section('header')
<h2>Register</h2>
@stop

@section('content')
{!! Form::open(['route' => 'auth.register']) !!}

@include('auth.forms.register')

{!! Form::close() !!}
@stop
