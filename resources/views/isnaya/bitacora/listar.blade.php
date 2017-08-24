<table class="table table-striped">
	<thead>
		<th>Tabla</th>
		<th>Acción</th>
		<th>Usuario</th>
		<th>Cargo</th>
		<th>Fecha</th>
	</thead>
	<tbody>
		@foreach($bitacoras as $bitacora)
			<tr>
				<td>{{$bitacora->tabla}}</td>
				<td>{{$bitacora->operacion}}</td>
				<td>{{$bitacora->user->name}}</td>
				<td>{{$bitacora->user->cargo}}</td>
				<td>{{$bitacora->created_at->format("d-m-y h:m:s")}}</td>
			</tr>
		@endforeach
	</tbody>
</table>
<center>
	<h4>{{$bitacoras->render()}}</h4> 
</center>
