@extends('isnaya.template.main')

@section('title','Usuarios')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection


@section('contenido')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
				@include('mensajes.error')
				<div id="message-update" class="alert alert-success alert-dismissible" role="alert" style="display:none">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong> Se actualizo correctamente</strong>
				</div>

			<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							Listado de Usuarios
						</div>
					</div>
				<div class="panel-body">
					{{--Agregamos un div con id donde traeremos la tabla--}}
					<div id="listar-usuarios">
						
					</div>
				</div>
			</div>

	</div>
</div>
@include('isnaya.Usuarios.modal')
@section('script')
<script>
		$(document).ready(function(){
		listarUsuario();
		});
		//creamos una funcion para listar atravez de ajax
		var listarUsuario = function(){
			$.ajax({
				type:'get',
				url:'{{url('listar-usuarios')}}',
				success: function(data){
					$('#listar-usuarios').empty().html(data);
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
					$("#listar-usuarios").empty().html(data);
				}

			});

		});

				//funcion para el boton de editar, aqui traemos los datos.
		var Mostrar = function(id){
			var route = "{{url('usuarios')}}/"+id+"/edit";
			$.get(route, function(data){
				//alert(id); traemos todos los datos
				$("#id").val(data.id);
				$("#name").val(data.name);
				$("#cargo").val(data.cargo);
				$("#type").val(data.type);

			});
		}

		//btn para actualizar con ajax
			$("#actualizar").click(function(){
			//recuperamos la informacion del modal atravez de los id
			var id = $("#id").val();
			var name = $("#name").val();
			var cargo = $("#cargo").val();
			var type = $("#type").val();
			var route = "{{url('usuarios')}}/"+id+"";
			var token = $("#token").val();

				$.ajax({
					url:route,
					headers:{'X-CSRF-TOKEN':token},
					type:'PUT',
					dataType:'json',
					data:{name:name,cargo:cargo,type:type},//aqui pasomos todo el parametro de datos
					success:function(data){

						//si es true la informacion es actualizada
						if(data.success == 'true'){
							listarUsuario();
							//despues de actualizar desaperece la ventana
							$("#myModal").modal('toggle');
							//pintamos un mensaje
							$("#message-update").fadeIn();
							$("#message-update").show().delay(3000).fadeOut(3);
						}
					},
					error:function(data){
						$("#error").html(data.responseJSON.name);
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
	