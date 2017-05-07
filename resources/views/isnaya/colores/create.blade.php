@extends('isnaya.template.main')

@section('title','Colores')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection


@section('contenido')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					Agregar Colores
				</div>
			</div>
			<div class="panel-body">
				{!!Form::open(['id'=>'form'])!!}
          		<div class="form-group">
            		<!--Nombramos las cajas de texto igual que los campos de la bd-->
            		{!!form::label('Color:')!!}
            		{!!form::text('color',null,['id'=>'color','class'=>'form-control','placeholder'=>'Escriba el color'])!!}
          		</div>
          		<div class="form-group">
            		<!--Agregamos nuestro link para trabajar ajax-->
            		{!!link_to('#','Guardar',['id'=>'guardarColor','class'=>'btn btn-primary btn-sm-mt-10'])!!}
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