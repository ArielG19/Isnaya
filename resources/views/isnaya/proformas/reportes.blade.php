@extends('isnaya.template.main')
@section('title','Lista de Proformas')
@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection
@section('contenido')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
					{{--MENSAJES--}}
			<div id="message-update" class="alert alert-info alert-dismissible" role="alert" style="display:none">
	        	<button type="button" class="close" 
	        			data-dismiss="alert" aria-label="Close">
	        			<span aria-hidden="true">&times;</span>
	        	</button>
				<strong> Se actualizo correctamente</strong>
			</div>

			<div id="message-save" class="alert alert-success alert-dismissible" role="alert" style="display:none">
	        	<button type="button" class="close" 
	        			data-dismiss="alert" aria-label="Close">
	        			<span aria-hidden="true">&times;</span>
	        	</button>
				<strong> Se agrego correctamente</strong>
			</div>
				{{--FIN DE MENSAJES--}}

			<div class="row cabecera-mag">
							<div class="col-md-6">
								<h5>Lista de Proformas</h5>
								<hr>
							</div>
							<div class="col-md-6">

								<!--Inicio de buscador-->
								<div class="col-md-8" style="margin-bottom:30px; margin-top: 10px;margin-right: -58px;">
									{!!Form::open(['route'=>'productos.index','method'=>'GET','class'=>'navbar-form pull-right'])!!}
										<div class="input-group">
											{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Buscar productos','aria-describedby'=>'search'])!!}
											<span class="input-group-addon" id="search">
												<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
											</span>
										</div>
									{!!Form::close()!!}	
								</div>
								<!--Fin-->

								<div class="col-md-4">
									<p class="navbar-text navbar-right" style="margin-top:17px;">
										<a class="btn btn-info btn-cian" href="#" data-toggle='modal' data-target='#myModalCreateProd' style="margin-bottom:20px; margin-left: 10px; padding: 6px 10px;">
					 						<span>Agregar <i class="fa fa-plus-circle" aria-hidden="true"></i></span>
              							</a>
									</p>
								</div>
							</div>	
			</div>
     		<div class="row">
     			<div id="listar-proformas"></div>
     		</div>
     		
								

	</div>
</div>
@include('isnaya.Proformas.modalDetalles')


@section('script')
	<script>
		$(document).ready(function(){
		listarProforma();
		});
		//creamos una funcion para listar atravez de ajax
		var listarProforma = function(){
			$.ajax({
				type:'get',
				url:'{{url('listar-proformas')}}',
				success: function(data){
					$('#listar-proformas').empty().html(data);
				}

			});
		}

		//creamos la paginacion usando ajax
		//dentro del documento se produce un click en la clase pagination
		$(document).on("click",".pagination li a",function(e){
			//se produce un evento
			e.preventDefault();
			var url = $(this).attr("href");

			$.ajax({
				type:'get',
				url:url,
				success:function(data){ //data contiene toda la informacion generada
					$("#listar-proformas").empty().html(data);
				}

			});

		});
	</script>
@endsection
@endsection