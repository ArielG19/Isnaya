<div class="modal fade" id="myModalCreateProd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span> 
				</button>
				<h4 class="modal-title" id="myModalLabel">Agregar nuevo producto</h4>
			</div>

			<div class="modal-body">
				{{--creamos un alert--}}
				<div id="addProdMessage-error" class="alert alert-danger danger" role="alert" style="display:none">
					<strong id="addProdError"></strong>
				</div>
				{{--cremos el formulario con un id para usar ajax--}}
				{!!Form::open(['id'=>'form'])!!}
					<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
					<input type="hidden" id="id">

				<div class="form-group">
                    <!--Nombramos las cajas de texto igual que los campos de la bd-->
                    {!!form::label('Descripcion:')!!}
                    {!!form::text('descripcion',null,['id'=>'addDescripcion','class'=>'form-control','placeholder'=>'Escriba una descripcion'])!!}
                {!!Form::close()!!}
                </div>

			</div>

			<div class="modal-footer">
				{!!link_to('#',$title ='Guardar',$attributes= ['id'=>'addProducto','class'=>'btn btn-primary'],$secure = null)!!}
			</div>		
		</div>
	</div>
</div>