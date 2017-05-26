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
<<<<<<< HEAD
	<div>
		@include('isnaya/template.nav')
		
=======
	<div class="">
		@include('isnaya.template.nav')
>>>>>>> 04769f9afa6d74201a59d659af3018ce5f4ac7c8
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