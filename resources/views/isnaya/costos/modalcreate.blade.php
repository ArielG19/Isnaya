<div class="modal fade" id="myModalCreate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content mod-magenta">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span> 
				</button>
				<h4 class="modal-title" id="myModalLabel">Agregar Clientes</h4>
			</div>
			<div class="modal-body">
				{{--creamos un alert--}}
				<div id="message-error" class="alert alert-danger danger" role="alert" style="display:none">
					<strong id="error"></strong>
				</div> 
                {!!Form::open(['id'=>'form'])!!}
                <div class="form-group">
                    <!--Nombramos las cajas de texto igual que los campos de la bd-->
                    {!!form::label('Nombres:')!!}
                    {!!form::text('nombre',null,['id'=>'addnombre','class'=>'form-control','placeholder'=>'Escriba los nombres'])!!}
                </div>
                <div class="form-group">
                     {!!form::label('Apellidos:')!!}
                    {!!form::text('apellido',null,['id'=>'addapellido','class'=>'form-control','placeholder'=>'Escriba los apellidos'])!!}
                </div>
                <div class="form-group">
                    {!!form::label('Telefono:')!!}
                    {!!form::text('telefono',null,['id'=>'addtelefono','class'=>'form-control','placeholder'=>'Escriba el número de telefono'])!!}
                </div>
                <div class="form-group">
                    {!!form::label('Email:')!!}
                    {!!form::text('email',null,['id'=>'addemail','class'=>'form-control','placeholder'=>'Escriba el email'])!!}
                </div>
                <div class="form-group">
                    {!!form::label('Fax:')!!}
                    {!!form::text('fax',null,['id'=>'addfax','class'=>'form-control','placeholder'=>'Escriba el fax'])!!}
                </div>
                {!! Form::close() !!}
			</div>
			<div class="modal-footer">
				{!!link_to('#',$title ='Guardar',$attributes= ['id'=>'guardarCliente','class'=>'btn btn-primary btn-cian'],$secure = null)!!}
			</div>		
		</div>
	</div>
</div>