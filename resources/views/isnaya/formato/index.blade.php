@extends('isnaya/template/main')

@section('title','Formatos')

@section('contenido')
<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{{--MENSAJES--}}
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
			{{--FIN DE MENSAJES--}}
			<div class="row cabecera-yellow">
							<div class="col-md-6">
								<h5>Lista de Formatos</h5>
								<hr>
							</div>
							<div class="col-md-6">
									<p class="navbar-text navbar-right" style="margin-top:7px; margin-right: 40px;">
						 				<a class="btn btn-info" href="#" data-toggle='modal' data-target='#myModalCreate'>
					 		  				<span>Agregar <i class="fa fa-plus-circle" aria-hidden="true"></i></span>
              							</a>
									</p>
							</div>			
			</div>
		
			<div class="row">
				<div id="listar-formato"></div>
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

					