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

@include('isnaya.rubro.modal_eli')

@section('script')
	<script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
@endsection