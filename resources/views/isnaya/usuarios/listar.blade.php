	<table class="table table-bordered">
								<thead>
									<th>ID</th>
									<th>Nombre</th>
									<th>Cargo</th>
									<th>Email</th>
									<th>Tipo</th>
									<th>Acciòn</th>
								</thead>
						<tbody>
							@foreach($usuarios as $usuario)
								<tr>
									<td>
										{{$usuario->id}}
									</td>

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
											<span class="label label-primary">{{$usuario->type}}</span>

										@else
										<span class="label label-success">{{$usuario->type}}</span>

										@endif

									</td>

																		
									 <td>
             							 <!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
             							 <a class="btn btn-info" href="#" Onclick='Mostrar({{$usuario->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
              								<i class="fa fa-pencil-square-o" aria-hidden="true">  Editar</i>
              							</a>

              							<a class="btn btn-warning" href="#" onclick="Eliminar('{{$usuario->id}}','{{$usuario->nombre}}')">
                						<i class="fa fa-times" aria-hidden="true"></i>  Eliminar
              							</a>
           							</td>
								</tr>

							@endforeach
						</tbody>
	</table>
	<center>
		<h4>{{$usuarios->render()}}</h4>
	</center>