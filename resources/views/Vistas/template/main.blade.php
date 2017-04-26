<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')-Isnaya Print</title>
	
	<link rel="stylesheet" href="{{URL::to('css/bootstrap/css/bootstrap.css')}}">
	@yield('css')

</head>
<body>
	<div class="">
		@include('Vistas/template.nav')
	</div>
	
	<div class="container-fluid">			
		@yield('contenido')
	</div>	
	@include('Vistas/template.footer')
	<script src="js/jquery.js"></script>

	@yield('script')
	
</body>
</html>