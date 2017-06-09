<table class="table table-striped">
	<thead>
		<th>Id</th>
		<th>Productos</th>
		<th id="opc">Opciones</th>
	</thead>
	<tbody>
		@foreach($productos as $producto)
			<tr>
				<td>{{$producto->id}}</td>
				<td>{{$producto->descripcion}}</td>
				<td id="op">
             		<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
             		<a id="edit" class="btn btn-info" href="#" Onclick='MostrarProducto({{$producto->id}});' data-toggle='modal' data-target='#myModalProducto' style ="margin-right: 8px;">
              			<i class="fa fa-pencil-square-o" aria-hidden="true">  Editar</i>
              		</a>

              		<a id="elim" class="btn btn-danger" href="#" onclick="Eliminar('{{$producto->id}}','{{$producto->nombre}}')">
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
