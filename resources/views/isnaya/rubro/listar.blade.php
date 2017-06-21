<table class="table table-striped">
	<thead>
		<th>Descripción</th>
		<th>Cantidad</th>
		<th>Costo</th>
		<th>Tipo</th>
		<th class="alitabla">Opciones</th>
	</thead>
	<tbody>
		@foreach($rubros as $rubro)
			<tr>
				<td>{{$rubro->descripcion}}</td>
				<td>{{$rubro->cantidad}}</td>
				<td>{{$rubro->costo}}</td>
				<td>{{$rubro->tipo}}</td>				
				<td class="alitabla">
             		<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
             		<a class="btn btn-info btn-cian" href="#" Onclick='MostrarRubro({{$rubro->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
              			<i aria-hidden="true">Editar</i>
              		</a>
              		<button type="button" class="btn btn-magenta-small" href="#">
              			<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
              		</button>
           		</td>
           			<!--<td>
           				en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego
             			 <a class="btn btn-danger" href="#" Onclick='Eliminar($rubro->id);' data-toggle='modal' data-target='#myModal2' style ="margin-right: 8px;">
              				<i class="fa fa-pencil-square-o" aria-hidden="true">  Eliminar</i>
              			</a>

           			</td>-->
				</tr>
		@endforeach
	</tbody>
</table>
<center>
	<h4>{{$rubros->render()}}</h4>
</center>