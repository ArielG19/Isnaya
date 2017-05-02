@extends('isnaya.template.main')

@section('title','Formatos')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection


@section('contenido')

<div class="row">
	<div class="col-md-8 col-md-offset-2">

				<div id="message-update" class="alert alert-success alert-dismissible" role="alert" style="display:none">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong> Se actualizo correctamente</strong>
				</div>

			<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							Lista de Formatos
						</div>
					</div>
				<div class="panel-body">
					{{--Agregamos un div con id donde traeremos la tabla--}}
					<div id="listar-formato">
						
					</div>
				</div>
			</div>

	</div>
</div>
@include('isnaya.formato.modal')
@section('script')
<script>
		$(document).ready(function(){
		listarFormato();
		});
		//creamos una funcion para listar atravez de ajax
		var listarFormato = function(){
			$.ajax({
				type:'get',
				url:'{{url('listar-formatos')}}',
				success: function(data){
					$('#listar-formato').empty().html(data);
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
					$("#listar-formato").empty().html(data);
				}

			});

		});

		//funcion para el boton de editar, aqui traemos los datos.
		var Mostrar = function(id){
			var route = "{{url('formatos')}}/"+id+"/edit";
			$.get(route, function(data){
				//alert(id); traemos todos los datos
				$("#id").val(data.id);
				$("#formato").val(data.formato);
				$("#estado").val(data.estado);
			});
		}

		//btn para actualizar con ajax
			$("#actualizar").click(function(){
			//recuperamos la informacion del modal atravez de los id
			var id = $("#id").val();
			var formato = $("#formato").val();
			var estado = $("#estado").val();
			var route = "{{url('formatos')}}/"+id+"";
			var token = $("#token").val();

				$.ajax({
					url:route,
					headers:{'X-CSRF-TOKEN':token},
					type:'PUT',
					dataType:'json',
					data:{formato:formato,estado:estado},//aqui pasomos todo el parametro de datos
					success:function(data){

						//si es true la informacion es actualizada
						if(data.success == 'true'){
							listarFormato();
							//despues de actualizar desaperece la ventana
							$("#myModal").modal('toggle');
							//pintamos un mensaje
							$("#message-update").fadeIn();
						}
					},
					error:function(data){
						$("#error").html(data.responseJSON.formato);
          				$("#message-error").fadeIn();
						if(data.status == 422){
							console.clear();
						}
					}
				});

			});	
			//Limpiamos el mensaje del modal
			$("#myModal").on("hidden.bs.modal", function(){
				$("#message-error").fadeOut();
			});
</script>
@endsection

@endsection