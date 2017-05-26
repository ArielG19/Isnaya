<table class="table table-striped">
	<thead>
		<th>Productos</th>
		<th id="op">Opciones</th>
	</thead>
	<tbody>
		@foreach($productos as $producto)
			<tr>
				<td>{{$producto->descripcion}}</td>
				<td id="o">
             		<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
             		<a class="btn btn-info" href="#" Onclick='MostrarProducto({{$producto->id}});' data-toggle='modal' data-target='#myModalProducto' style ="margin-right: 8px;">
              			<i class="fa fa-pencil-square-o" aria-hidden="true">  Editar</i>
              		</a>

              		<a id="op" class="btn btn-danger" href="#" onclick="Eliminar('{{$producto->id}}','{{$producto->nombre}}')">
                		<i class="fa fa-trash" aria-hidden="true"></i>
              		</a>

           		</td>
			</tr>
		@endforeach
	</tbody>
</table>
<center>
	<h4>{{$productos->render()}}</h4>
</center>
