<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
					<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span> 
							</button>
							<h4 class="modal-title" id="myModalLabel">Actualizar usuario</h4>
					</div>

					<div class="modal-body">
						{{--creamos un alert--}}
						<div id="message-error" class="alert alert-danger danger" role="alert" style="display:none">
								<strong id="error"></strong>
						</div>
						{{--cremos el formulario con un id para usar ajax--}}
						{!!Form::open(['id'=>'form'])!!}
							<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
							<input type="hidden" id="id">

							<div class="form-group">
                        		{!!form::label('Nombre:')!!}
                        		{!!form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Escriba un nombre'])!!}
                    		</div>

                    		<div class="form-group">
                        		<!--Nombramos las cajas de texto igual que los campos de la bd-->
                        		{!!form::label('Cargo:')!!}
                        		{!!form::text('cargo',null,['id'=>'cargo','class'=>'form-control','placeholder'=>'Escriba un cargo'])!!}
                    		</div>

                    		<div class="form-group">
                        		{!!Form::label('Tipo')!!}
                        		{!!Form::select('type',['admin'=>'administrador','usuario'=>'Usuario'],null,['id'=>'type','class'=>'form-control'])!!}
                    		</div>
                		{!!Form::close()!!}
					</div>

					<div class="modal-footer">
						{!!link_to('#',$title ='Actualizar',$attributes= ['id'=>'actualizarUsuario','class'=>'btn btn-primary'],$secure = null)!!}
					</div>		
		</div>
	</div>
</div>