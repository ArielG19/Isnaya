<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Productos</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
			{!!Form::open(['route'=>'productos.store','method'=>'POST'])!!}
					<div class="form-group">
						{!!Form::label('Descripcion:')!!}
						{!!form::text('descripcion',null,['id'=>'descripcion','class'=>'form-control','placeholder'=>'Escriba una descripcion'])!!}
					</div>

					<div class="form-group">
						{!!form::submit('Registrar',['class'=>'btn btn-primary'])!!}
					</div>

			{!!Form::close()!!}
	</div>
</div>

</body>
</html>