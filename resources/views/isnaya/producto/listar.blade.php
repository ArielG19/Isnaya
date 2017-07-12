<table class="table table-striped">
	<thead>
		<th>Id</th>
		<th>Productos</th>
		<th class="alitabla">Opciones</th>
	</thead>
	<tbody>
		@foreach($productos as $producto)
			<tr>
				<td>{{$producto->id}}</td>
				<td>{{$producto->descripcion}}</td>
				<td class="alitabla">
             		<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
              		<button type="button" class="btn btn-info btn-cian" href="#" Onclick='MostrarProducto({{$producto->id}});' data-toggle='modal' data-target='#myModalProducto'>
              			Editar
              		</button>
              		<button type="button" class="btn btn-magenta-small" href="#" onclick="Eliminar('{{$producto->id}}','{{$producto->nombre}}')">
    					<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
					</button>
           		</td>
			</tr>
		@endforeach
	</tbody>
</table>
<center>
	<h4>{{$productos->render()}}</h4>
</center>
