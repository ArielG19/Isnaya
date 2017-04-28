@extends('isnaya.template.main')

@section('title','Productos')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection


@section('contenido')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							Lista de productos
						</div>
					</div>
				<div class="panel-body">
					{{--Agregamos un div con id donde traeremos la tabla--}}
					<div id="listar-producto">
						
					</div>
				</div>
			</div>

	</div>
</div>
@include('isnaya.producto.modal')

@section('script')
<script>
		$(document).ready(function(){
		listarProducto();
		});
		//creamos una funcion para listar atravez de ajax
		var listarProducto = function(){
			$.ajax({
				type:'get',
				url:'{{url('listar')}}',
				success: function(data){
					$('#listar-producto').empty().html(data);
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
					$("#listar-producto").empty().html(data);
				}

			});

		});


	//ACTUALIZAR----------------------------------------
	//creamos la function para mostrar datos en el modal. y esta va en boton editar 
	var Mostrar = function(id){
		var route = "{{url('productos')}}/"+id+"/edit";
		$.get(route, function(data){
			//alert(id);
			$("#id").val(data.id);
			$("#descripcion").val(data.descripcion);
		});

		//btn para actualizar con ajax
		$("#actualizar").click(function(){
			//recuperamos la informacion del modal atravez de los id
			var id = $("#id").val();
			var descripcion = $("#descripcion").val();
			var route = "{{url('productos')}}/"+id+"";
			var token = $("#token").val();

			$.ajax({
				url:route,
				headers:{'X-CSRF-TOKEN':token},
				type:'PUT',
				dataType:'json',
				data:{descripcion:descripcion},
				success:function(data){

					//si es true la informacion es actualizada
					if(data.success == 'true'){
						listarProducto();
						//despues de actualizar desaperece la ventana
						$("#myModal").modal('toggle');
						//pintamos un mensaje
						$("#message-update").fadeIn();
					}
				},
				/*error:function(data){
					$("#error").html(data.responseJson.nombre);
					$("#message-error").fadeIn();
					if(data.status == 422){
						console.clear();
					}
				}*/
		});

	});
	}
	
</script>
@endsection
@endsection



