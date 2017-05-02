<!--creamos una condicion donde indicamos que si encuentra un error-->
<div class="row">
	<div class="col-md-10">
		@if (count($errors)>0)
			<div class="alert alert-danger" role="alert">
				<strong>Acciòn inavalida</strong>
				<ul>
				@foreach($errors->all() as $error)
					<li>
						{{$error}}
					</li>
					@endforeach
				</ul>
		
			</div>
			@endif

		@if (Session::has('save'))
		<div class="container">
			<div class="alert alert-info" role="alert">
				<strong>{{Session::get('save')}}</strong>
			</div>
			</div>
		@endif
		@if (Session::has('update'))

			<div class="container">
				<div class="alert alert-success" role="alert">
				<strong>{{Session::get('update')}}</strong>
				</div>
			</div>
		@endif

		@if (Session::has('delete'))
			<div class="alert alert-danger" role="alert">
				<strong>{{Session::get('delete')}}</strong>
			</div>
		@endif
		</div>
</div>