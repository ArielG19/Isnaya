<table class="table table-bordered">
								<thead>
									<th>Id</th>
									<th>Productos</th>
									<th>Accìòn</th>
								</thead>
						<tbody>
							@foreach($productos as $producto)
								<tr>
									<td>{{$producto->id}}</td>
									<td>{{$producto->descripcion}}</td>
									
									   <td>
             							 <!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
             							 <a class="btn btn-info" href="#" Onclick='MostrarProducto({{$producto->id}});' data-toggle='modal' data-target='#myModalProducto' style ="margin-right: 8px;">
              								<i class="fa fa-pencil-square-o" aria-hidden="true">  Editar</i>
              							</a>

              							<a class="btn btn-warning" href="#" onclick="Eliminar('{{$producto->id}}','{{$producto->nombre}}')">
                						<i class="fa fa-times" aria-hidden="true"></i>  Eliminar
              							</a>
           							</td>


								</tr>
							@endforeach
						</tbody>
</table>
	<center>
		<h4>{{$productos->render()}}</h4>
	</center>
