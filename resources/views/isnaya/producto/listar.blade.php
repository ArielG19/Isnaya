<table class="table table-bordered">
<<<<<<< HEAD
<<<<<<< HEAD
	<thead>
		<th>ID</th>
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
             		<a class="btn btn-info" href="#" Onclick='MostrarProducto({{$producto->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
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
=======
=======
>>>>>>> 491f5afed7c124a66affbb7f2d7bb7e247e8657c
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
             							 <a class="btn btn-info" href="#" Onclick='Mostrar({{$producto->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
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
<<<<<<< HEAD
>>>>>>> e2f56c567df3c6b57a7d16d49728d19162374ae0
=======
=======
	<thead>
		<th>ID</th>
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
             		<a class="btn btn-info" href="#" Onclick='MostrarProducto({{$producto->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
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
>>>>>>> edcb6fc40264bf751411c5ac8c1ed04521ab46a9
>>>>>>> 491f5afed7c124a66affbb7f2d7bb7e247e8657c
