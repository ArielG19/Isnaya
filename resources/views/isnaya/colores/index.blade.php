@extends('isnaya/template/main')

@section('title')
	Colores
@endsection
	
@section('contenido')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div id="message-update" class="alert alert-success alert-dismissible" role="alert" style="display:none">
			<strong>Se ha actualizado correctamente</strong>
		</div>
		<div class="row cabecera-yellow"> 
			<div class="col-md-6">
				<h5>Lista de Colores</h5>
				<hr>
			</div>
			<div class="col-md-6">
				<div class="col-md-8">
					<br>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Buscar...">
					</div>
				</div>
				<div class="col-md-4">
					<p class="navbar-text navbar-right">
						<a class="btn btn-info btn-cian" href="#" data-toggle='modal' data-target='#myModalCreate' style="margin-top: 5px; margin-right: -15px; padding: 5px 18px;">
							<span>
								Agregar + <i aria-hidden="true"></i>
							</span>
              			</a>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			{{--Agregamos un div con id donde traeremos la tabla--}}
			<div id="listar-colores">
						
			</div>
		</div>
	</div>
</div>
@endsection

@include('isnaya.colores.modal')
@include('isnaya.colores.modalCreate')

@section('script')
    <script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
    <script>
    	listarColores();
    </script>
@endsection