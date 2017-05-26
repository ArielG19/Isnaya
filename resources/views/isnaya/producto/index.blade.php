@extends('isnaya.template.main')

@section('title','Productos')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilostabla.css')}}">
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
		
			<div class="panel panel-default">
				<div class="panel-heading">
						<div class="panel-title">
							<h5 style="margin-bottom:-15px;"> Lista de Productos</h5>
							<hr width="50%" style="margin-bottom:-20px; margin-left: 1px;">
				    	</div>
				    <!--Inicio de buscador-->
					<div class="row">
						<div class="col-md-12" style="margin-bottom:-13px; margin-top: -20px;margin-left:-88px;">
								{!!Form::open(['route'=>'productos.index','method'=>'GET','class'=>'navbar-form pull-right'])!!}
							<div class="input-group">
								{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Buscar productos','aria-describedby'=>'search'])!!}
								<span class="input-group-addon" id="search">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								</span>
							</div>
								{!!Form::close()!!}
							
						</div>
					</div>
					<!--Fin-->
						<p class="navbar-text navbar-right" style="margin-top: -15px;">
						 	<a class="btn btn-info" href="#" data-toggle='modal' 
						 	   data-target='#myModalCreateProd' 
						 	   style="margin-bottom:1px; margin-top: -11px;margin-right: 8px; padding: 4px 18px;">
					 		  <span>Agregar <i class="fa fa-plus-circle" aria-hidden="true"></i></span>
              				</a>
						</p>
				</div>
				<div class="panel-body">
					{{--AQUI LLENAMOS MOSTRAMOS LA TABLA--}}
					<div id="listar-producto"></div>
				</div>
			</div>
	</div>
</div>
@endsection

@include('isnaya.producto.modalCreateProd')
@include('isnaya.Producto.modalUpdateProd')


@section('script')
	<script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
	<script>listarProducto();</script>
@endsection