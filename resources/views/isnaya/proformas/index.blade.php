@extends('isnaya.template.main')
@section('title','Proformas')
@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection
@section('contenido')

<div class="row">
	<div class=" ">
       			<div id="message-update" class="alert alert-success alert-dismissible" role="alert" style="display:none">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong> Se actualizo correctamente</strong>
				</div>

				<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Lista de proformas</div>
						</div>
						<div class="panel-body">
							<div id="listar-proformas"></div>
						</div>
				</div>

	</div>
</div>
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