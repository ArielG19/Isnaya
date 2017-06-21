<div class="modal fade" id="myModalCreate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content mod-yellow">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span> 
				</button>
				<h4 class="modal-title" id="myModalLabel">Agregar Rubros</h4>
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
                    {!!form::label('Descripcion:')!!}
                        {!!form::text('descripcion',null,['id'=>'adddescripcion','class'=>'form-control','placeholder'=>'Escriba una descripcion'])!!}
                    {!!Form::close()!!}
                </div>
                <div class="form-group">
                     <!--Nombramos las cajas de texto igual que los campos de la bd-->
                    {!!form::label('Cantidad:')!!}
                        {!!form::text('cantidad',null,['id'=>'addcantidad','class'=>'form-control','placeholder'=>'Escriba una Cantidad'])!!}
                    {!!Form::close()!!}
                </div>
                <div class="form-group">
                     <!--Nombramos las cajas de texto igual que los campos de la bd-->
                    {!!form::label('Costo:')!!}
                        {!!form::text('costo',null,['id'=>'addcosto','class'=>'form-control','placeholder'=>'Escriba el Costo'])!!}
                    {!!Form::close()!!}
                </div>
                <div class="form-group">
                     <!--Nombramos las cajas de texto igual que los campos de la bd-->
                    {!!form::label('Tipo:')!!}
                        {!!form::text('tipo',null,['id'=>'addtipo','class'=>'form-control','placeholder'=>'Escriba el Tipo de Rubro'])!!}
                    {!!Form::close()!!}
                </div>
			</div>
			<div class="modal-footer">
				{!!link_to('#',$title ='Agregar',$attributes= ['id'=>'guardarRubro','class'=>'btn btn-primary btn-cian'],$secure = null)!!}
			</div>		
		</div>
	</div>
</div>