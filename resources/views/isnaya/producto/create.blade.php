@extends('isnaya.template.main')

@section('title','Productos')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection


@section('contenido')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
    @include('mensajes.error')
      <div id="message-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong id="error"></strong>
      </div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					Agregar producto
			  </div>
	   	</div>
			<div class="panel-body">
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
</div>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
@endsection


              