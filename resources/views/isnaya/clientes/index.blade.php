 @extends('isnaya/template/main')

@section('title')
	Clientes
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
							Lista de Clientes
						</div>
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


@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
			listarClientes();
	
		});
	
	
		//creamos una funcion para listar atravez de ajax
			var listarClientes = function(){
				$.ajax({
					type:'get',
					url:'{{url('lis_clientes')}}',
					success: function(data){
						$('#listar-cliente').empty().html(data);
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
						$("#listar-cliente").empty().html(data);
					}
	
				});
	
			});		
	
		//ACTUALIZAR----------------------------------------
		//creamos la function para mostrar datos en el modal. y esta va en boton editar 
		var Mostrar = function(id){
	
			var route = "{{url('clientes')}}/"+id+"/edit";
			$.get(route, function(data){

				//alert(id);
				$("#id").val(data.id);
				$("#nombre").val(data.nombre);
				$("#apellido").val(data.apellido);
				$("#telefono").val(data.telefono);
				$("#email").val(data.email);
				$("#fax").val(data.fax);
			});
		}
			//btn para actualizar con ajax
			$("#actualizar").click(function(){
				//recuperamos la informacion del modal atravez de los id
				var id = $("#id").val();
				var nombre = $("#nombre").val();
				var apellido = $("#apellido").val();
				var telefono = $("#telefono").val();
				var email = $("#email").val();
				var fax = $("#fax").val();
	
				var route = "{{url('clientes')}}/"+id+"";
				var token = $("#token").val();
	
				$.ajax({
					url:route,
					headers:{'X-CSRF-TOKEN':token},
					type:'PUT',
					dataType:'json',
					data:{nombre:nombre,apellido:apellido,telefono:telefono,email:email,fax:fax},
					success:function(data){
	
						//si es true la informacion es actualizada
						if(data.success == 'true'){
							listarClientes();
							//despues de actualizar desaperece la ventana
							$("#myModal").modal('toggle');
							//pintamos un mensaje
							$("#message-update").fadeIn();
							$("#message-update").show().delay(3000).fadeOut(3);
						}
					},
			});
	
		});
	
	</script>
@endsection