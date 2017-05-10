<div class="modal fade" id="myModalCreate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span> 
						</button>
						<h4 class="modal-title" id="myModalLabel">Agregar nuevo Formato</h4>
					</div>

					<div class="modal-body">
						{{--creamos un alert--}}
						<div id="message-error" class="alert alert-danger danger" role="alert" style="display:none">
							<strong id="error"></strong>
						</div>
							{!!Form::open(['id'=>'form'])!!}

                       			<div class="form-group">
                         			<!--Nombramos las cajas de texto igual que los campos de la bd-->
                         			{!!form::label('Formato:')!!}
                         			{!!form::text('formato',null,['id'=>'formato','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                       			</div>

                       			<div class="form-group">
                        			{!!Form::label('estado','Tipo de estado')!!}
                        			{!!Form::select('estado',[''=>'Seleccione un estado','Activo'=>'Activo','Inactivo'=>'Inactivo'],null,['id'=>'estado','class'=>'form-control'])!!}
                      			</div>
        					{!! Form::close() !!}
					</div>

					<div class="modal-footer">
						<div class="form-group">
                         	<!--Agregamos nuestro link para trabajar ajax-->
                         	 {!!link_to('#','Guardar',['id'=>'guardarFormato','class'=>'btn btn-primary btn-sm-mt-10'])!!}
                		</div>
					</div>		
	    </div>
	</div>
</div>