@extends('isnaya.template.main')

@section('title','Productos')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection


@section('contenido')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					Agregar producto
				</div>
			</div>
			<div class="panel-body">
				{{--{!!Form::open(['route'=>'productos.store','method'=>'POST'])!!}
					<div class="form-group">
						{!!Form::label('Descripcion:')!!}
						{!!form::text('descripcion',null,['id'=>'descripcion','class'=>'form-control','placeholder'=>'Escriba una descripcion'])!!}
					</div>

					<div class="form-group">
						{!!form::submit('Registrar',['class'=>'btn btn-primary'])!!}
					</div>
				{!!Form::close()!!}--}}

				{{--Creando con ajax--}}

				 {!!Form::open(['id'=>'form'])!!}

                       <div class="form-group">
                         <!--Nombramos las cajas de texto igual que los campos de la bd-->
                         {!!form::label('Descripcion:')!!}
                         {!!form::text('descripcion',null,['id'=>'descripcion','class'=>'form-control','placeholder'=>'Escriba una descripcion'])!!}
                       </div>

                       <div class="form-group">
                         <!--Agregamos nuestro link para trabajar ajax-->
                          {!!link_to('#','Guardar',['id'=>'guardar','class'=>'btn btn-primary btn-sm-mt-10'])!!}
                          <!--Agregamos un button para cancelar-->

                   {!! Form::close() !!}

			</div>
		</div>
	</div>
</div>
@section('script')
<script>
		$("#guardar").click(function(event){
			//recuperamos el valor del input descripcion
  			var descripcion = $("#descripcion").val();

  			//recuperamos la informacion del token
  			var token = $("input[name=_token]").val();

  			//la ruta donde se envia la informacion del formulario
  			var route = "{{route('productos.store')}}";
  			var dataSting = "descripcion="+descripcion;

      			$.ajax({
     			url:route,
      			headers:{'X-CSRF-TOKEN':token},
      			type:'post',
      			datatype:'json',
      			data:dataSting,
        			success:function(data){
          				if(data.success=='true'){
            				alert('Se registro');
            				document.location.href= "{{ route('productos.index')}}"; 
         				 }
        			},
        			//aqui atrapamos los errores una vez validados atraves de un request
        			/*error:function(data){
          			//aun nos muestra nuestro mensaje por que nos falta validar en el request
          			//obtenemos el mensaje de validacion console.log(data.responseJSON.nombre);
          			$("#error").html(data.responseJSON.nombre);
          			$("#message-error").fadeIn();
        			}*/

      			});
  		});
</script>
@endsection

@endsection

