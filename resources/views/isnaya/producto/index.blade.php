@extends('isnaya/template/main')

@section('title','Productos')

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
			<div class="row cabecera-yellow">
				<div class="col-md-4">
					<h5>Lista de Productos</h5>
					<hr>
				</div>
				<div class="col-md-8">
					<!--Inicio de buscador-->
					<div class="col-md-8" style="margin-top:3px;">
						<div class="col-md-8  input-group">
							<input type="text" class="form-control col-md-8 " placeholder="Buscar Producto" id="input-search" style="margin-bottom:1px;">
							<div class="input-group-addon" id="btn-search">
								<i class="glyphicon glyphicon-search" aria-hidden="true"></i>
							</div>
						</div>	
						<div id="buscar" style=""></div>		
					</div>
					<!--Fin-->
					<div class="col-md-4">
						<p class="navbar-text navbar-right" style="margin-top:17px; margin-right: 10px;">
							<a class="btn btn-info btn-cian" href="#" data-toggle='modal' data-target='#myModalCreateProd' style="margin-bottom:5px;padding: 6px 10px;">
					 		<span>Agregar <i class="fa fa-plus-circle" aria-hidden="true"></i></span>
              				</a>
						</p>
					</div>
				</div>	
			</div>
			<div class="row">
				<div id="listar-producto"></div>
			</div>
		</div>
	</div>
@endsection

@include('isnaya.producto.modalCreateProd')
@include('isnaya.Producto.modalUpdateProd')

@section('script')
	<script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
	<script>listarProducto();</script>

	<script>
		var inputSearch = $('#input-search');
		var btnSearch = $('#btn-search');

		btnSearch.on('click', function(){
			var valorBusq = inputSearch.val();
			console.log(valorBusq);

			$.ajax({
		        method: "GET",
		        url: "/productos/"+valorBusq
		      })
		      .done(function(data){
		        console.log(data); 
		        //alert([data["0"].id, data["0"].descripcion]);
		        
		        if(data == ''){
		       		$("#buscar").empty().text('no hay considencias');
		        }else{
		        	$("#buscar").empty().html('<b>Resultados: '+data["0"].descripcion +'</b>');	
		        }
		      });
		      
		});
	</script>
@endsection