@extends('isnaya.template.main')

@section('title','Usuarios')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection

@section('contenido')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div id="message-save" class="alert alert-success alert-dismissible" role="alert" style="display:none">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            	<span aria-hidden="true">&times;</span>
	            </button>
				<strong> Se agrego correctamente</strong>
			</div>

			<div id="message-update" class="alert alert-info alert-dismissible" role="alert" style="display:none">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            	<span aria-hidden="true">&times;</span>
	            </button>
				<strong> Se actualizo correctamente</strong>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						Listado de Usuarios
					</div>
			        <p class="navbar-text navbar-right" style="margin-top: -15px;">
					    <a class="btn btn-info" href="#" data-toggle='modal' data-target='#myModalcreateUser'   style="margin-bottom:1px; margin-top: -11px;margin-right: 8px; padding: 4px 15px;">
					 		<span>Agregar <i class="fa fa-plus-circle" aria-hidden="true"></i></span>
              			</a>
					</p>
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
@include('isnaya.usuarios.modalCreateUser')
@include('isnaya.usuarios.modal')

@section('script')
	<script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
	<script>listarUsuario();</script>
@endsection	

