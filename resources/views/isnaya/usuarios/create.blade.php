@extends('isnaya.template.main')

@section('title','Usuarios')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection


@section('contenido')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
   

         <div id="message-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong id="error"></strong>
        </div>

           <div id="message-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong id="success"></strong>
        </div>

		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					Agregar Usuarios
				</div>
			</div>
			<div class="panel-body">
				{{--Creando con ajax--}}

				 {!!Form::open(['id'=>'form'])!!}

                       <div class="form-group">
                         <!--Nombramos las cajas de texto igual que los campos de la bd-->
                         {!!form::label('Nombre:')!!}
                         {!!form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Escriba un nombre'])!!}
                       </div>

                       <div class="form-group">
                         <!--Nombramos las cajas de texto igual que los campos de la bd-->
                         {!!form::label('Cargo:')!!}
                         {!!form::text('cargo',null,['id'=>'cargo','class'=>'form-control','placeholder'=>'Escriba un cargo'])!!}
                       </div>

                       <div class="form-group">
                         <!--Nombramos las cajas de texto igual que los campos de la bd-->
                         {!!form::label('Email:')!!}
                         {!!form::email('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Escriba un correo example@gmil.com'])!!}
                       </div>

                       <div class="form-group">
                         {!!Form::label('Contraseña:')!!}
                         {!!Form::password('password',['id'=>'password','class' => 'form-control','placeholder'=> '****','required'])!!}
                      </div>

                      <div class="form-group">
                        {!!Form::label('Tipo')!!}
                        {!!Form::select('type',[''=>'Seleccione un tipo','admin'=>'administrador','usuario'=>'Usuario'],null,['id'=>'type','class'=>'form-control'])!!}
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
  			var name = $("#name").val();
        var cargo = $("#cargo").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var type = $("#type").val();

  			//recuperamos la informacion del token
  			var token = $("input[name=_token]").val();

  			//la ruta donde se envia la informacion del formulario
  			var route ="{{route('usuarios.store')}}";
      		$.ajax({
     			  url:route,
      			headers:{'X-CSRF-TOKEN':token},
      			type:'post',
      			datatype:'json',
      			data:{name:name,cargo:cargo,email:email,password:password,type:type},
        			success:function(data){
          				if(data.success=='true'){
                    document.location.href= "{{ route('usuarios.index')}}"; 
                  }
        			},
        			//aqui atrapamos los errores una vez validados atraves de un request
        			error:function(data){
          			//obtenemos el mensaje de validacion console.log(data.responseJSON.nombre);
          			$("#error").html(data.responseJSON.name);
          			$("#message-error").fadeIn();
                $("#message-error").show().delay(3000).fadeOut(3);
        			}

      			});
  		});
</script>
@endsection

@endsection