{{--Modal--}}
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span> 
				</button>
				<h4 class="modal-title" id="myModalLabel">Actualizar Rubros</h4>
			</div>

			<div class="modal-body">
				{{--creamos un alert--}}
				<div id="message-error" class="alert alert-danger danger" role="alert" style="display:none">
					<strong id="error"></strong>
				</div>


				<h3>Esta seguro de eliminar el registro</h3>
				

			</div>

			<div class="modal-footer">
				{!!link_to('#',$title ='eliminar',$attributes= ['id'=>'eliminar','class'=>'btn btn-primary'],$secure = null)!!}
			</div>		
		</div>
	</div>
</div>