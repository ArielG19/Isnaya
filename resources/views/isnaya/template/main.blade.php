<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')-Isnaya Print</title>
	
	<link rel="stylesheet" href="{{URL::to('css/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.css')}}">
	<link rel="stylesheet" href='css/estilos.css'>
	
	@yield('css')

</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="">
		@include('isnaya.template.nav')
	</div>
	
	<div class="container-fluid">			
		@yield('contenido')
	</div>	


	@include('isnaya/template.footer')
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('css/bootstrap/js/bootstrap.js')}}"></script>

	@yield('script')

	
</body>
</html>