@extends('isnaya.template.main')

@section('title','Usuarios')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection

@section('contenido')
<<<<<<< HEAD
<<<<<<< HEAD
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@include('mensajes.error')
			<div id="message-update" class="alert alert-success alert-dismissible" role="alert" style="display:none">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            	<span aria-hidden="true">&times;</span>
	            </button>
				<strong> Se actualizo correctamente</strong>
			</div>
=======
=======
>>>>>>> 491f5afed7c124a66affbb7f2d7bb7e247e8657c

<div class="row">
	<div class="col-md-8 col-md-offset-2">
				@include('mensajes.error')
				
				<div id="message-update" class="alert alert-success alert-dismissible" role="alert" style="display:none">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong> Se actualizo correctamente</strong>
				</div>

<<<<<<< HEAD
>>>>>>> e2f56c567df3c6b57a7d16d49728d19162374ae0
=======
=======
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@include('mensajes.error')
			<div id="message-update" class="alert alert-success alert-dismissible" role="alert" style="display:none">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            	<span aria-hidden="true">&times;</span>
	            </button>
				<strong> Se actualizo correctamente</strong>
			</div>
>>>>>>> edcb6fc40264bf751411c5ac8c1ed04521ab46a9
>>>>>>> 491f5afed7c124a66affbb7f2d7bb7e247e8657c
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						Listado de Usuarios
					</div>
				</div>
				<div class="panel-body">
					{{--Agregamos un div con id donde traeremos la tabla--}}
					<div id="listar-usuarios">
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@include('isnaya.Usuarios.modal')

@section('script')
	<script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
@endsection	