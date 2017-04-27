<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')-Isnaya Print</title>
	
	<link rel="stylesheet" href="{{URL::to('css/bootstrap/css/bootstrap.css')}}">
	@yield('css')

</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="">
		@include('isnaya/template.nav')
	</div>
	
	<div class="container-fluid">			
		@yield('contenido')
	</div>	


	@include('isnaya/template.footer')
	<script src="js/jquery.js"></script>
	<script src="css/bootstrap/js/bootstrap.js"></script>

	@yield('script')

	
</body>
</html>