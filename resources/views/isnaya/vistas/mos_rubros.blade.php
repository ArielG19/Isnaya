@extends('isnaya/template/main')

@section('title')
	Mostrar los Rubros
@endsection

@section('css')
	<link rel="stylesheet" href="{{URL::to('css/bootstrap/css/bootstrap.min.css')}}">
@endsection


@section('contenido')
<div class="container">
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2>Lista de Rubros</h2>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<tr>
						<td>Descripción</td>
						<td>Cantidad</td>
						<td>Costo</td>
						<td>Tipo</td>
						<td>Opción</td>
					</tr>
				
					@foreach($rubro as $rub)
					<tr>
						<td>{{$rub->descripcion}}</td>
						<td>{{$rub->cantidad}}</td>
						<td>{{$rub->costo}}</td>
						<td>{{$rub->tipo}}</td>
        				<td>{{$rub->estado}}</td>
				
						<td><a href="">Editar</a></td>
					</tr>
					@endforeach
  				</table>
			</div>
		</div>
	</div>
</div>
@endsection