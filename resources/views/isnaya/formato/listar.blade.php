<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Formato</th>
		<th>Estado</th>
		<th class="alitabla">Opciones</th>
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
						<span class="label label-info" style="width: 10%; padding: 12px 10px; position: absolute;">{{$formato->estado}}</span>
					@else
						<span class="label label-default" style="width: 10%; padding: 12px 10px; position: absolute;">{{$formato->estado}}</span>
					@endif
				</td>													
				<td class="alitabla">
             	<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
             		<a class="btn btn-info btn-cian" href="#" Onclick='MostrarFormato({{$formato->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
					 	<i aria-hidden="true">  Editar</i>
              		</a>

              		<a id="elim" class="btn btn-magenta-small" href="#" onclick="Eliminar('{{$formato->id}}','{{$formato->nombre}}')"> 
					  	<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
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