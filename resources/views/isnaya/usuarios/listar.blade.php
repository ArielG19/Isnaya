<table class="table table-striped">
	<thead>
		<th>Nombre</th>
		<th>Cargo</th>
		<th>Email</th>
		<th>Tipo</th>
		<th>Opciones</th>
	</thead>
	<tbody>
		@foreach($usuarios as $usuario)
			<tr>
				<td>
					{{$usuario->name}}
				</td>
				<td>
					{{$usuario->cargo}}
				</td>
				<td>
					{{$usuario->email}}
				</td>
				
				<td>
					@if($usuario->type =="admin")
						<span class="label label-info" style="padding: 12px 10px; position: absolute;">{{$usuario->type}}</span>
					@else
						<span class="label label-default" style="padding: 12px 10px; position: absolute">{{$usuario->type}}</span>
					@endif
				</td>									
				<td>
             		<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
             		<a class="btn btn-primary btn-cian" href="#" Onclick='MostrarUsuario({{$usuario->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
              			<i class="fa fa-pencil-square-o" aria-hidden="true">  Editar</i>
              		</a>
              		<a id="elim" class="btn btn-magenta-small" href="#" onclick="Eliminar('{{$usuario->id}}','{{$usuario->nombre}}')">
                		<i class="fa fa-trash" aria-hidden="true"></i>
              		</a>
           		</td>
			</tr>
		@endforeach
	</tbody>
</table>
<center>
	<h4>{{$usuarios->render()}}</h4>
</center>