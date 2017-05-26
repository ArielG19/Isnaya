<table class="table table-bordered">
	<thead>
		<th>ID</th>
		<th>Formato</th>
		<th>Estado</th>
		<th>Accìòn</th>
	</thead>
	<tbody>
		@foreach($formatos as $formato)
		{{--@if($formato->estado =="Activo")--}}
			<tr>
				<td>
				    {{$formato->id}}
				</td>
				<td>
					{{$formato->formato}}
				</td>
				<td>
					@if($formato->estado =="Activo")
						<span class="label label-primary">{{$formato->estado}}</span>
					@else
						<span class="label label-default">{{$formato->estado}}</span>
					@endif
				</td>									
				<td>
                <!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
             	    <a class="btn btn-info" href="#" Onclick='MostrarFormato({{$formato->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
              			<i class="fa fa-pencil-square-o" aria-hidden="true">Editar</i>
              		</a>
              		<a class="btn btn-warning" href="#" onclick="Eliminar('{{$formato->id}}','{{$formato->nombre}}')">
                		<i class="fa fa-times" aria-hidden="true"> Eliminar</i> 
              		</a>
           		</td>
			</tr>
		{{--@endif--}}
		@endforeach
	</tbody>
</table>
<center>
	<h4>{{$formatos->render()}}</h4>
</center>
	<table class="table table-bordered">
								<thead>
									<th>ID</th>
									<th>Formato</th>
									<th>Estado</th>
									<th>Accìòn</th>
								</thead>
						<tbody>
							@foreach($formatos as $formato)

							{{--@if($formato->estado =="Activo")--}}
								<tr>
									<td>
										{{$formato->id}}
									</td>

									<td>
										{{$formato->formato}}
									</td>

									<td>
										@if($formato->estado =="Activo")
											<span class="label label-primary">{{$formato->estado}}</span>

										@else
										<span class="label label-default">{{$formato->estado}}</span>

										@endif

									</td>

																		
									 <td>
             							 <!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
             							 <a class="btn btn-info" href="#" Onclick='MostrarFormato({{$formato->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
              								<i class="fa fa-pencil-square-o" aria-hidden="true">  Editar</i>
              							</a>

              							<a class="btn btn-warning" href="#" onclick="Eliminar('{{$formato->id}}','{{$formato->nombre}}')">
                						<i class="fa fa-times" aria-hidden="true"></i>  Eliminar
              							</a>
           							</td>
								</tr>
								{{--@endif--}}

							@endforeach
						</tbody>
	</table>
	<center>
		<h4>{{$formatos->render()}}</h4>
	</center>