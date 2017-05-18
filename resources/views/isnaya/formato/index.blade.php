@extends('isnaya.template.main')

@section('title','Formatos')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection

@section('contenido')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
			{{--FIN DE MENSAJES--}}
			<div class="panel panel-default">
				<div class="panel-heading">
						<div class="panel-title">Lista de Formatos</div>
						<p class="navbar-text navbar-right" style="margin-top: -15px;">
						 	<a class="btn btn-info" href="#" data-toggle='modal' 
						 	   data-target='#myModalCreate' 
						 	   style="margin-bottom:1px; margin-top: -11px;margin-right: 8px; padding: 4px 18px;">
					 		  <span>Agregar <i class="fa fa-plus-circle" aria-hidden="true"></i></span>
              				</a>
						</p>
				</div>
				<div class="panel-body">
						{{--AQUI LLENAMOS MOSTRAMOS LA TABLA--}}
					<div id="listar-formato"></div>
				</div>
		</div>
	</div>
</div>
@endsection

@include('isnaya.formato.modalCreate')
@include('isnaya.formato.modal')

@section('script')
	<script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
	<script>listarFormato();</script>
@endsection

