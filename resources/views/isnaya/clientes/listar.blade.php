<table class="table .table-responsive">
	<thead>
		<th>ID</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Telefono</th>
		<th>Email</th>
		<th>Fax</th>
		<th>Opción</th>
	</thead>
	<tbody>
		@foreach($clientes as $cliente)
			<tr>
				<td>{{$cliente->id}}</td>
				<td>{{$cliente->nombre}}</td>
				<td>{{$cliente->apellido}}</td>
				<td>{{$cliente->telefono}}</td>
				<td>{{$cliente->email}}</td>
				<td>{{$cliente->fax}}</td>			
				<td>
             		<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
             		<a class="btn btn-primary" href="#" Onclick='MostrarCliente({{$cliente->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
              			<i class="fa fa-pencil-square-o" aria-hidden="true">Editar</i>
              		</a>
           		</td>
			</tr>
		@endforeach
	</tbody>
</table>
<center>
	<h4>{{$clientes->render()}}</h4>
</center>