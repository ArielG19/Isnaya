<table class="table table-bordered">
	<thead>
		<th>ID</th>
		<th>Descripción</th>
		<th>Cantidad</th>
		<th>Costo</th>
		<th>Tipo</th>
		<th>Opción</th>
	</thead>
	<tbody>
		@foreach($rubros as $rubro)
			<tr>
				<td>{{$rubro->id}}</td>
				<td>{{$rubro->descripcion}}</td>
				<td>{{$rubro->cantidad}}</td>
				<td>{{$rubro->costo}}</td>
				<td>{{$rubro->tipo}}</td>
									
					<td>
             			<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
             			 <a class="btn btn-primary" href="#" Onclick='Mostrar({{$rubro->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
              				<i class="fa fa-pencil-square-o" aria-hidden="true">  Editar</i>
              			</a>

              			{{--<a href="#" onclick="Eliminar('{{$producto->id}}','{{$categoria->nombre}}')">
                		<i class="fa fa-times" aria-hidden="true"></i>  Eliminar
              			</a>--}}
           			</td>
				</tr>
		@endforeach
	</tbody>
</table>
<center>
	<h4>{{$rubros->render()}}</h4>
</center>