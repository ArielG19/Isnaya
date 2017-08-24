@extends('isnaya/template/main')

@section('title')
	Inicio
@endsection

@section('css')
	<link rel="stylesheet" href="{{URL::to('css/bootstrap/css/bootstrap.css')}}">
@endsection


@section('contenido')
	<center><h1>Inicio del sistema de Gestión de Isnaya</h1></center>
	
@endsection


@section('script')
	<script src="css/bootstrap/js/bootstrap.js"></script>
@endsection

