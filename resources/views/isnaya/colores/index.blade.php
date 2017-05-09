@extends('isnaya/template/main')

@section('title')
	Colores
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
						Lista de Colores
					</div>
				</div>
			<div class="panel-body">
				<div id="listar-colores">
						
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@include('isnaya.colores.modal')

@section('script')
    <script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
@endsection