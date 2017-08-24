@extends('isnaya/template/main')

@section('title')
	Bitacora
@endsection

@section('contenido')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{{--MENSAJES--}}
			<div id="message-update" class="alert alert-info alert-dismissible" role="alert" style="display:none">
	        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	        		<span aria-hidden="true">&times;</span>
	        	</button>
				<strong> Se actualizó correctamente</strong>
			</div>
			{{--FIN DE MENSAJES--}}
			<div class="row cabecera-yellow">
				<div class="col-md-8">
					<h5>Bitacora de acciones realizadas en la aplicación</h5>
					<hr>
				</div>
				<div class="col-md-4">
				</div>
			</div>
			<div class="row">
				{{--Agregamos un div con id donde traeremos la tabla--}}
				<div id="listar-bitacora">
						
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
	<script>
		listarBitacora();
	</script>
@endsection