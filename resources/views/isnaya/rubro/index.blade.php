@extends('isnaya/template/main')

@section('title')
	Lista de Rubros
@endsection

@section('contenido')
	<div class="row">
	<div class="col-md-8 col-md-offset-2">

		<div id="message-update" class="alert alert-success alert-dismissible" role="alert" style="display:none">
			<strong>Se ha actualizado correctamente</strong>
		</div>

		<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						Lista de Rubros 
					</div>
					<p class="navbar-text navbar-right" style="margin-top: -11px;">
						<a class="btn btn-info" href="#" data-toggle='modal' data-target='#myModalCreate' style="margin-bottom:1px; margin-top: -11px;margin-right: 8px; padding: 4px 18px;">
					 		<span>
					 			Agregar<i class="fa fa-plus-circle" aria-hidden="true"></i>
					 		</span>
              			</a>
					</p>

				</div>
			<div class="panel-body">
				{{--Agregamos un div con id donde traeremos la tabla--}}
				<div id="listar-rubro">
						
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@include('isnaya.rubro.modal')
@include('isnaya.rubro.modalCreate')

@section('script')
	<script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
@endsection