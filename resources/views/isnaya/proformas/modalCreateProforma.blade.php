<div class="modal fade" id="myModalCreateProd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header deta">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span> 
				</button>
				<h4 class="modal-title" id="myModalLabel">Crear Proformas</h4>
			</div>

			<div class="modal-body">
				<th>Cliente</th>
									<th>Fecha</th>
									<th>Producto</th>
									<th>Estado</th>
									<th>Total</th>

			</div>

			<div class="modal-footer">
				{!!link_to('#',$title ='Guardar',$attributes= ['id'=>'addProducto','class'=>'btn btn-info btn-cian'],$secure = null)!!}
			</div>		
		</div>
	</div>
</div>