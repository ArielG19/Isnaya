{{--Modal--}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
			    <div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span> 
								</button>
								<h4 class="modal-title" id="myModalLabel">Actualizar Formato</h4>
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
                         				<!--Nombramos las cajas de texto igual que los campos de la bd-->
                         				{!!form::label('Formato:')!!}
                         				{!!form::text('formato',null,['id'=>'formato','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                       				</div>

                       				<div class="form-group">
                        				{!!Form::label('estado','Tipo de estado')!!}
                        				{!!Form::select('estado',[''=>'Seleccione un estado','Activo'=>'Activo','Inactivo'=>'Inactivo'],null,['id'=>'estado','class'=>'form-control'])!!}
                      				</div>
                      			{!!Form::close()!!}

							</div>

							<div class="modal-footer">
								{!!link_to('#',$title ='Actualizar',$attributes= ['id'=>'actualizar','class'=>'btn btn-primary'],$secure = null)!!}
							</div>		
			    </div>
	</div>
</div>