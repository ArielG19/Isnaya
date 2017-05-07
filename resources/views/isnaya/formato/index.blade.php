@extends('isnaya.template.main')

@section('title','Formatos')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection


@section('contenido')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div id="message-update" class="alert alert-success alert-dismissible" role="alert" style="display:none">
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong> Se actualizo correctamente</strong>
		</div>
		<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						Lista de Formatos
					</div>
				</div>
				<div class="panel-body">
					{{--Agregamos un div con id donde traeremos la tabla--}}
					<div id="listar-formato">
						
					</div>
				</div>
		</div>

	</div>
</div>
@endsection

@include('isnaya.formato.modal')

@section('script')
	<script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
@endsection

