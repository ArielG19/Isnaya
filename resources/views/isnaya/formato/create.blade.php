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
				{!!Form::open(['route'=>'productos.store','method'=>'POST'])!!}
					<div class="form-group">
						{!!Form::label('Descripcion:')!!}
						{!!form::text('descripcion',null,['id'=>'descripcion','class'=>'form-control','placeholder'=>'Escriba una descripcion'])!!}
					</div>

					<div class="form-group">
						{!!form::submit('Registrar',['class'=>'btn btn-primary'])!!}
					</div>
				{!!Form::close()!!}
			</div>
		</div>
	</div>
</div>
@endsection