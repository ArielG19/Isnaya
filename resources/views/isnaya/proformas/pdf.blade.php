<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="/css/pdf.css">
</head>
<body>				<center><h1>Listado de proformas</h1></center>
					<table width="100%" border="1px solid">					
								<thead>
								<tr>
									<th>Cliente</th>
									<th>Fecha</th>
									<th>Producto</th>
									<th>Estado</th>
									<th>Total</th>
								</tr>	
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
									<td>Total</td>
								</tr>
						@endforeach
						</tbody>
					</table>
</body>
</html>