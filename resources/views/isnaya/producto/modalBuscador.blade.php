<div class="modal fade" id="myModalBuscador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content mod-yellow">
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
				@foreach($producto as $pro)
					<p>{{$pro}}</p>
				@endforeach
			</div>

			<div class="modal-footer">
				{!!link_to('#',$title ='Guardar',$attributes= ['id'=>'addProducto','class'=>'btn btn-info btn-cian'],$secure = null)!!}
			</div>		
		</div>
	</div>
</div>