<table class="table table-striped">
	<thead>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Telefono</th>
		<th>Email</th>
		<th>Fax</th>
		<th class="alitabla">Opciones</th>
	</thead>
	<tbody>
		@foreach($clientes as $cliente)
			<tr>
				<td>{{$cliente->nombre}}</td>
				<td>{{$cliente->apellido}}</td>
				<td>{{$cliente->telefono}}</td>
				<td>{{$cliente->email}}</td>
				<td>{{$cliente->fax}}</td>			
				<td class="alitabla">
             		<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
             		<a class="btn btn-primary btn-cian" href="#" Onclick='MostrarCliente({{$cliente->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
              			<i aria-hidden="true">Editar</i>
              		</a>
              		<button type="button" class="btn btn-magenta-small" href="#">
              			<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
              		</button>
           		</td>
			</tr>
		@endforeach
	</tbody>
</table>
<center>
	<h4>{{$clientes->render()}}</h4>
</center>