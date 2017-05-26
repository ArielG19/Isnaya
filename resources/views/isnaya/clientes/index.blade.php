 @extends('isnaya/template/main')

@section('title')
	Clientes
@endsection

@section('contenido')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
				
				{{--MENSAJES--}}
					<div id="message-update" class="alert alert-info alert-dismissible" role="alert" style="display:none">
	        			<button type="button" class="close" 
	        			data-dismiss="alert" aria-label="Close">
	        				<span aria-hidden="true">&times;</span>
	        			</button>
						<strong> Se actualizó correctamente</strong>
					</div>
					<div id="message-save" class="alert alert-success alert-dismissible" role="alert" style="display:none">
	        			<button type="button" class="close" 
	        			data-dismiss="alert" aria-label="Close">
	        				<span aria-hidden="true">&times;</span>
	        			</button>
						<strong> Se agregó correctamente</strong>
					</div>
					{{--FIN DE MENSAJES--}}

					<div class="panel-title">
						<h4 style="margin-bottom:-15px;"> Lista de Clientes</h4>
						<hr width="50%" style="margin-bottom:-20px; margin-left: 10px;">
				    </div>
				    <!--Inicio de buscador-->
					<div class="row">
						<div class="col-md-12" style="margin-bottom:-13px; margin-top: -20px;margin-left:-88px;">
								{!!Form::open(['route'=>'clientes.index','method'=>'GET','class'=>'navbar-form pull-right'])!!}
							<div class="input-group">
								{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Buscar cliente','aria-describedby'=>'search'])!!}
								<span class="input-group-addon" id="search">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								</span>
							</div>
								{!!Form::close()!!}
							
						</div>
					</div>
					<!--Fin-->

				    <p class="navbar-text navbar-right" style="margin-top: -27px;">
						<a class="btn btn-info" href="#" data-toggle='modal' data-target='#myModalCreate' style="margin-bottom:15px; margin-right: 22px; padding: 6px 10px;">
					 		<span>
					 			Agregar <i class="fa fa-plus-circle" aria-hidden="true"></i>
					 		</span>
              			</a>
					</p>
				</div>
				<div class="panel-body">
					{{--Agregamos un div con id donde traeremos la tabla--}}
					<div id="listar-cliente">
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@include('isnaya.clientes.modal')
@include('isnaya.clientes.modalcreate')


@section('script')
	<script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
	<script>
		listarClientes();
	</script>
@endsection