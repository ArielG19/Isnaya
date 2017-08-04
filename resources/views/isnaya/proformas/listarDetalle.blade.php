<ul>
	<li>
		<b>Cliente: </b>{{$proformas->cliente->nombre}} {{$proformas->cliente->apellido}}
	</li>

	<li>
		<b>Solicitante:</b>{{$proformas->solicitante}}
	</li>

	<li>
		<b>Fecha de Solicitud: </b>{{$proformas->fecha}} <br> <b>Fecha de entrega: </b>{{$proformas->fechaFin}}
	</li>

	<li>
		<b>Telefono:</b>{{$proformas->telefono}} <br> <b>Fax: </b>{{$proformas->fax}}
	</li>
</ul>

<ul>
	<li>
		<b>Producto: </b>{{$proformas->producto->descripcion}}
	</li>

	<li>
		<b>Volumen: </b>{{$proformas->volumen}}
	</li>

	<li>
		<b>Formato: </b>{{$proformas->formato->formato}} 
	</li>
</ul>

