@extends('isnaya.template.main')

@section('title','Formatos')

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
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					Agregar Formato
				</div>
			</div>
			<div class="panel-body">
				{{--Creando con ajax--}}

				 {!!Form::open(['id'=>'form'])!!}

                       <div class="form-group">
                         <!--Nombramos las cajas de texto igual que los campos de la bd-->
                         {!!form::label('Formato:')!!}
                         {!!form::text('formato',null,['id'=>'formato','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                       </div>

                       <div class="form-group">
                        {!!Form::label('estado','Tipo de estado')!!}
                        {!!Form::select('estado',[''=>'Seleccione un estado','Activo'=>'Activo','Inactivo'=>'Inactivo'],null,['id'=>'estado','class'=>'form-control'])!!}
                      </div>

                       <div class="form-group">
                         <!--Agregamos nuestro link para trabajar ajax-->
                          {!!link_to('#','Guardar',['id'=>'guardar','class'=>'btn btn-primary btn-sm-mt-10'])!!}
                          <!--Agregamos un button para cancelar-->
                      </div>
        {!! Form::close() !!}

			
		</div>
	</div>
</div>
@section('script')
<script>
	$("#guardar").click(function(event){
      //recuperamos el valor del input descripcion
        var formato = $("#formato").val();
        var estado = $("#estado").val();

        //recuperamos la informacion del token
        var token = $("input[name=_token]").val();

        //la ruta donde se envia la informacion del formulario
        var route = "{{route('formatos.store')}}";
            $.ajax({
            url:route,
            headers:{'X-CSRF-TOKEN':token},
            type:'post',
            datatype:'json',
            data:{formato:formato,estado:estado},
              success:function(data){
                  if(data.success=='true'){
                    //alert('Se registro');
                    document.location.href= "{{ route('formatos.index')}}"; 
                 }
              },
              //aqui atrapamos los errores una vez validados atraves de un request
              error:function(data){
                //obtenemos el mensaje de validacion console.log(data.responseJSON.nombre);
                $("#error").html(data.responseJSON.formato);
                $("#message-error").fadeIn();
                $("#message-error").show().delay(3000).fadeOut(3);

              }


            });
      });
</script>
@endsection

@endsection