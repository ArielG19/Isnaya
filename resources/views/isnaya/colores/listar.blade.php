<table class="table table-striped">
	<thead>
		<th>Colores</th>
		<th style="text-align: right;">Opciones</th>
	</thead>
	<tbody>
		@foreach($colores as $color)
			<tr>
				<td>{{$color->color}}</td>					
				<td style="text-align: right;">
             		<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
             		<a class="btn btn-primary btn-cian" href="#" Onclick='MostrarColor({{$color->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
              		<i aria-hidden="true">Editar</i>
              		</a>
              		<button type="button" class="btn btn-magenta" href="#">
              			<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
              		</button>
           		</td>
			</tr>
		@endforeach
	</tbody>
</table>
<center>
	<h4>{{$colores->render()}}</h4>
</center>