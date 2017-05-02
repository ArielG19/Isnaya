@extends('isnaya.template.main')

@section('title','Clientes')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection


@section('contenido')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					Agregar Clientes
				</div>
			</div>
			<div class="panel-body">
				 {!!Form::open(['id'=>'form'])!!}

          <div class="form-group">
            <!--Nombramos las cajas de texto igual que los campos de la bd-->
            {!!form::label('Nombres:')!!}
            {!!form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Escriba los nombres'])!!}
          </div>

          <div class="form-group">
            {!!form::label('Apellidos:')!!}
            {!!form::text('apellido',null,['id'=>'apellido','class'=>'form-control','placeholder'=>'Escriba los apellidos'])!!}
          </div>
          <div class="form-group">
            {!!form::label('Telefono:')!!}
            {!!form::text('telefono',null,['id'=>'telefono','class'=>'form-control','placeholder'=>'Escriba el número de telefono'])!!}
          </div>

          <div class="form-group">
            {!!form::label('Email:')!!}
            {!!form::text('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Escriba el email'])!!}
          </div>

          <div class="form-group">
            {!!form::label('Fax:')!!}
            {!!form::text('fax',null,['id'=>'fax','class'=>'form-control','placeholder'=>'Escriba el fax'])!!}
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
</div>


@section('script')

<script>
		$("#guardar").click(function(event){
			
  			var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var telefono = $("#telefono").val();
        var email= $("#email").val();
        var fax = $("#fax").val();
  			//recuperamos la informacion del token
  			var token = $("input[name=_token]").val();

  			//la ruta donde se envia la informacion del formulario
  			var route = "{{route('clientes.store')}}";

      			$.ajax({
     			  url:route,
      			headers:{'X-CSRF-TOKEN':token},
      			type:'post',
      			datatype:'json',
      			data:{nombre:nombre,apellido:apellido,telefono:telefono,email:email,fax:fax},
        			success:function(data){
          				if(data.success=='true'){
            				alert('Se registro');
            				document.location.href= "{{ route('clientes.index')}}"; 
         				 }
        			},

      			});
  		});
</script>
@endsection

@endsection

