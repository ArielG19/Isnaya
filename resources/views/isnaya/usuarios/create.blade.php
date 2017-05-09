@extends('isnaya.template.main')

@section('title','Usuarios')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection

@section('contenido')
  <div class="row">
	  <div class="col-md-8 col-md-offset-2">
      <div id="message-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong id="error"></strong>
      </div>
      <div id="message-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
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
              {!!link_to('#','Guardar',['id'=>'guardarUsuario','class'=>'btn btn-primary btn-sm-mt-10'])!!}
              <!--Agregamos un button para cancelar-->
            </div>
          {!! Form::close() !!}  
			  </div>
		  </div>
	  </div>
  </div>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
@endsection
