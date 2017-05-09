<table class="table .table-responsive">
	<thead>
		<th>ID</th>
		<th>Colores</th>
		<th>Opción</th>
	</thead>
	<tbody>
		@foreach($colores as $color)
			<tr>
				<td>{{$color->id}}</td>
				<td>{{$color->color}}</td>					
				<td>
             		<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
             		<a class="btn btn-primary" href="#" Onclick='MostrarColor({{$color->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
              		<i class="fa fa-pencil-square-o" aria-hidden="true">Editar</i>
              		</a>
           		</td>
			</tr>
		@endforeach
	</tbody>
</table>
<center>
	<h4>{{$colores->render()}}</h4>
</center>