<table class="table table-striped">
								<thead>
									<th>Cliente</th>
									<th>Fecha</th>
									<th>Producto</th>
									<th>Estado</th>
									<th>Total</th>
									<th>Opciones</th>
								</thead>
						<tbody>
						@foreach($proformas as $proforma)
							
								<tr>
									<td>{{$proforma->cliente->nombre}}</td>
									<td>{{$proforma->created_at->format('d-m-Y')}}</td>
									<td>{{$proforma->producto->descripcion}}</td>

									<td>
										@if($proforma->estado =="activo")
											<span class="label label-info">{{$proforma->estado}}</span>
										@else
											<span class="label label-danger">{{$proforma->estado}}</span>
										@endif										
									</td>
									<td>{{$proforma->total}}</td>
           							<td>
           								<a id="btn-detalle" class="btn btn-info" href="#" Onclick=' MostrarProforma({{$proforma->id}});' data-toggle='modal' data-target='#myModalDetalles' style ="margin-right: 8px;">
              								Detalles
              							</a>

              							<a id="imprimir" class="btn btn-default" href="/pdf" style ="margin-right: 8px;">
              								<i class="fa fa-print" aria-hidden="true"> PDF</i>
              							</a>

             							<a class="btn btn-info" href="#" Onclick='MostrarProducto({{$proforma->id}});' data-toggle='modal' data-target='#myModalProducto' style ="margin-right: 8px;">
              								<i class="fa fa-pencil-square-o" aria-hidden="true">  Editar</i>
              							</a>

              							<a id="op" class="btn btn-danger" href="#" onclick="">
                							<i class="fa fa-trash" aria-hidden="true"></i>
              							</a>
           							</td>
								</tr>
						@endforeach
						</tbody>
</table>
	<center>
		<h4>{{$proformas->render()}}</h4>
	</center>
</div>