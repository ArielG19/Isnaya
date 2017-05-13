@extends('isnaya.template.main')
@section('title')
	prueba
@endsection

@section('css')
	<link rel="stylesheet" href="{{URL::to('css/bootstrap/css/bootstrap.css')}}">
@endsection

@section('contenido')
{{Form::open(array('name'=>'formulario','method'=>'POST'))}}
		<h2>I Base de datos</h2>
		<div class="row">
			<div class='col-xs-3'>
				{{form::label('texto','Fecha:')}}
				<input type="date" name="tiempolocal" class="form-control">

			</div> 
			<div class='col-xs-3'>
					{{Form::hidden('usuario', null, array('class' => 'form-control','onblur'=>'captura(this.value)')) }}
				</div>
		</div>
		<br>	
		<div class="row">
			<div class='col-xs-4'> 
				{{form::label('texto','Nombre del cliente:')}} 
						{{ Form::select('cliente',array('class' => 'btn btn-default dropdown-toggle',
						 'autocomplete'=>'true')) }}
						<br><br>
						<a class="btn" data-toggle="modal" data-target="#agregar">guardar</a>
			 
<!-- 			//inicia el modal de agregar cliente
 -->
			</div>
					<!-- Modal -->
		<!-- 			<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									ENCABEZADO MODAL
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4>Guardar Nuevo Registro de Lector</h4>
									</div>
									Contenido
									<div class="modal-body">
										
									</div>
									PIE-
									<div class="modal-footer">
										<button class="btn btn-primary" form="registroLectores">Registrar</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
									</div>
								</div>
							</div>
						</div>

			//termina el modal de agregar cliente
			 -->

 			<div class='col-xs-4'> 
				{{form::label('stexto','Nombre del Solicitante:')}} 
				{{Form::text('solicitante', null, array('class' => 'form-control','onblur'=>'prueba()')) }}
			</div> 
		</div>
		<br><br>
		<div class="row">
				<div class='col-xs-3'>
					{{form::label('texto','Telefono:')}} 
					{{Form::text('telefono', null, array('class' => 'form-control')) }}
				</div>
				<div class='col-xs-3'>
					{{form::label('texto','Fax:')}} 
					{{Form::text('fax', null, array('class' => 'form-control')) }}  <br><br>
				</div>
		</div>
		<div class="row">
			<div class='col-xs-7'>
				{{form::label('texto','Tipo de producto:')}} 
				<br>
				{{ Form::select('id_producto', array('class' => 'btn btn-default dropdown-toggle')) }}
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class='col-xs-3'>
				{{form::label('texto','Formato:')}}</br>
				{{ Form::select('formato')}}
			</div>
			<div class='col-xs-3'>
				{{form::label('texto','Personalizado:')}} 
				{{Form::checkbox('pers', '1')}}
				{{Form::text('formatoPers')}} <br><br>
			</div>
		</div>
		<div class="row">
			<div class='col-xs-2'>
				{{form::label('texto','Volumen:')}} 
				{{Form::text()}} <br>
			</div>
			<div class='col-xs-3'>
				{{form::label('texto','Caras:')}}<br> 
	                {{Form::select('caras', array('0' => 'Selecione','1' => '1 Cara','2' => '2 Caras'))}}
			</div>
		</div>
		<h4>{{form::label('texto','Material del cuerpo:')}} </h4>
		<br>
			{{form::label('texto','Material 1:')}}
		<div class="row">
			<br>
			<div class='col-xs-2'>
				{{Form::text()}} <br>
			</div>
			<div class='col-xs-2'>
				{{ Form::select()}}
			</div>
		</div>
		{{form::label('texto','Material 2:')}}
		<div class="row">
			<br>
			<div class='col-xs-2'>
				{{Form::text('cant_papel_mat2', 0 , array('class' => 'form-control'))}} <br>
			</div>
			<div class='col-xs-2'>
				{{ Form::select('mat_cuerpo2', array('class' => 'btn btn-default dropdown-toggle'))}}
			</div>
		</div>
		{{form::label('texto','Material 3:')}}
		<div class="row">
			<br>
			<div class='col-xs-2'>
				{{Form::text('cant_papel_mat3', 0 , array('class' => 'form-control'))}} <br>
				<br>
			</div>
			<div class='col-xs-2'>
				{{ Form::select('mat_cuerpo3', array('class' => 'btn btn-default dropdown-toggle'))}}
			</div>
		</div>
		<h4>{{form::label('texto','Portada:')}}</h4>
		<div class="row">
			<div class='col-xs-3'>
				{{form::label('texto','paginas de Portada:')}}
			</div>
		</div>
		<div class="row">
			<div class='col-xs-2'>
				{{Form::text('N_pag_port', 0, array('class' => 'form-control'))}} <br>
			</div>
			<div class='col-xs-2'>
				{{ Form::select('mat_port', array('class' => 'btn btn-default dropdown-toggle')) }}<br>
			</div>
			<div class='col-xs-2'>
				{{ Form::select('color_port', array('class' => 'btn btn-default dropdown-toggle'))}}
			</div>
		</div>
		<h4>{{form::label('texto','Color de las páginas del cuerpo:')}}</h4>
		<div class="row">
			<div class='col-xs-2'>
				{{Form::text('pag_cuerpo_1', 0 , array('class' => 'form-control'))}} <br>
			</div>
			<div class='col-xs-2'>
				{{ Form::select('colorC1',array('class' => 'btn btn-default dropdown-toggle'))}}
			</div>
			<div class='col-xs-2'>
				{{Form::text('pag_cuerpo_2', 0, array('class' => 'form-control'))}} <br>
			</div>
			<div class='col-xs-2'>
				{{ Form::select('colorC2', array('class' => 'btn btn-default dropdown-toggle'))}}
			</div>
			<div class='col-xs-2'>
				{{Form::text('pag_cuerpo_3', 0, array('class' => 'form-control'))}} <br>
			</div>
			<div class='col-xs-2'>
				{{ Form::select('colorC3', array('class' => 'btn btn-default dropdown-toggle'))}}
			</div>
		</div>

		<div class="row">
			<div class='col-xs-2'>
				{{Form::text('pag_cuerpo_4', 0, array('class' => 'form-control'))}} <br>
			</div>
			<div class='col-xs-2'>
				{{ Form::select('colorC4', array('class' => 'btn btn-default dropdown-toggle'))}}
			</div>
			<div class='col-xs-2'>
				{{Form::text('pag_cuerpo_5', 0, array('class' => 'form-control'))}} <br>
			</div>
				<div class='col-xs-2'>
					{{ Form::select('colorC5', array('class' => 'btn btn-default dropdown-toggle'))}}
				</div>
				<div class='col-xs-2'>
				{{Form::text('pag_cuerpo_6', 0 , array('class' => 'form-control'))}} <br>
				</div>
				<div class='col-xs-2'>
					{{ Form::select('colorC6', array('class' => 'btn btn-default dropdown-toggle'))}}
				</div>
		</div>
		<div class="row">
			<div class='col-xs-8'>
				<h4>Encuadernación</h4>
					{{form::label('texto','Grapado:')}} 
					{{Form::checkbox('enc_grapado', '1')}} &nbsp&nbsp&nbsp&nbsp
					{{form::label('texto','Granel:')}} 
					{{Form::checkbox('enc_granel', '2')}}&nbsp&nbsp&nbsp&nbsp
					{{form::label('texto','Encolado/Encolochado:')}} 
					{{Form::checkbox('enc_encolado', '3')}}&nbsp&nbsp&nbsp&nbsp 
					<br><br>
					{{form::label('texto','Barniz Ultravioleta:')}} 
					{{Form::checkbox('ultraV', '3')}}&nbsp&nbsp&nbsp&nbsp
					{{form::label('texto','Plastificado:')}} 
					{{Form::checkbox('enc_plastificado', '4')}} <br><br>
				
				<h4>Arte y Diseño</h4>
				{{form::label('texto','Imprenta:')}} 
				{{Form::radio('arteYdis_imp', '1')}}&nbsp&nbsp&nbsp&nbsp
				{{form::label('texto','Cliente:')}} 
				{{Form::radio('arteYdis_clie', '2')}} <br><br>
				{{form::label('texto','Otros datos:')}} 
				{{Form::textarea('otrosDatos')}} <br><br>
			</div>
		</div>


		
<div class='division'></div>



<h2>Calcular Costos</h2>
	<h4>{{form::label('texto','Papel 1:')}}</h4>
	<div class="row">
		<div class='col-xs-3'>
			{{form::label('text','Material:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('text','Volumen:')}} 
			{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('text','Costo Unitario:')}} 
			{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('text','Costo Total:')}} 
			{{form::text()}} <br>
		</div>
	</div>
	<h4>{{form::label('texto','Papel 2:')}}</h4>
	<div class="row">
		<div class='col-xs-3'>
			{{form::label('text','Material:')}} 
			{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('text','Volumen:')}} 
			{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('text','Costo Unitario:')}} 
			{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('text','Costo Total:')}} 
			{{form::text()}} <br>
		</div>
	</div>
	<h4>{{form::label('texto','Papel 3:')}}</h4>
	<div class="row">
		<div class='col-xs-3'>
			{{form::label('text','Material:')}} 
			{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('text','Volumen:')}} 
			{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('text','Costo Unitario:')}} 
			{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('text','Costo Total:')}} 
			{{form::text()}} <br>
		</div>
	</div>
	<h3>{{form::label('texto','Portada:')}}</h3>
	<div class="row">
		<div class='col-xs-3'>
			{{form::label('text','Material:')}} 
			{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('text','Volumen:')}} 
			{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('text','Costo Unitario:')}} 
			{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('text','Costo Total:')}} 
			{{Form::text()}} <br>
		</div>
	</div>
	<br>
	<div class="row">
		<div class='col-xs-3'>
			{{form::label('texto','Separacion de colores:')}} 
			{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Arte, diseño y diagramacion:')}} 
			{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Levantado de texto:')}} 
			{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Master electrostático o Láser:')}} 
			{{Form::text()}} <br>
		</div>
	</div>
	<h3>{{form::label('texto','Laminas:')}}<br></h3>
	<div class="row">
		<div class='col-xs-3'>
		{{form::label('text','Volumen:')}} 
		{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
		{{form::label('text','Costo Unitario:')}} 
		{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
		{{form::label('text','Costo Total:')}} 
		{{Form::text()}} <br>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class='col-xs-3'>
			{{form::label('texto','Tintas offset:')}} 
			{{Form::text()}} <br>
		</div>
	</div>
	<hr>
	<h3>{{form::label('texto','M.O. Fotomecánica:')}}<br></h3>
	<div class="row">
		<div class='col-xs-3'>
			{{form::label('texto','Volumen:')}} 
			{{Form::text()}} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Costo Unitario:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Costo Total:')}} 
			{{Form::text() }} <br>
		</div>
	</div>
	<hr>
	<h3>{{form::label('texto','M.O. Impresion offset:')}}<br></h3>
	<div class="row">
		<div class='col-xs-3'>
			{{form::label('texto','Volumen:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Costo Unitario:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Costo Total:')}} 
			{{Form::text() }} <br>
		</div>
	</div>
	<div class="row">
		<div class='col-xs-3'>
			{{form::label('texto','Fotocopia B/N:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Corte:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Compaginacion:')}} 
			{{Form::text() }} <br>
		</div>
	</div>
	<h3>{{form::label('texto','Grapado:')}}<br></h3>
	<div class="row">
		<div class='col-xs-3'>
			{{form::label('texto','Volumen:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Costo Unitario:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Costo Total:')}} 
			{{Form::text() }} <br>
		</div>
	</div>
	<h3>{{form::label('texto','Encolado/Encolochado:')}}<br></h3>
	<div class="row">
		<div class='col-xs-3'>
			{{form::label('texto','Volumen:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Costo Unitario:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Costo Total:')}} 
			{{Form::text() }} <br>
		</div>
	</div>
	<h3>{{form::label('texto','Cocido:')}}<br></h3>
	<div class="row">
		<div class='col-xs-3'>
			{{form::label('texto','Volumen:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Costo Unitario:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Costo Total:')}} 
			{{Form::text() }} <br>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class='col-xs-3'>
			{{form::label('texto','Numerado:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Troquelado:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Plastificado:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Otros')}} 
			{{Form::text() }} <br>
		</div>
	</div>
	<hr>
	<h3>{{form::label('texto','Totales:')}}<br></h3>
	<div class="row">
		<div class='col-xs-3'>
			{{form::label('texto','Sub total')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Gastos:')}} 
			{{Form::text() }} <br>

		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Costo Total:')}} 
			{{Form::text() }} <br>
		</div>
		<div class='col-xs-3'>
			{{form::label('texto','Utilidad Bruta:')}} 
			{{Form::text() }} <br>
		</div>
	</div>
	<div class='row'>
		
		<div class='col-xs-3'>
			{{form::label('texto','Descuento en C$:')}} 
			{{Form::text() }} <br>
		</div>
	
	</div>
	<div class="row">
		<div class='col-xs-3'>
			{{form::label('texto','IVA: ')}} 
			<input type="checkbox" name="chk_iva" id="chk_iva"  onchange="f_iva()">
			{{Form::text('iva', 0, array('class' => 'form-control','onblur'=>'funcion(this.value)','readonly')) }} <br>
		</div>
	</div>
	<div class='row'>
		<div class='col-xs-3'>
			{{form::label('texto','Valor de venta Total:')}}
			{{Form::text('valor_venta', 0, array('class' => 'form-control','onblur'=>'utilidad(this.value)','readonly')) }} <br>
		</div>
	</div>
	<div class='row'>
		<div class='col-xs-3'>
			{{form::label('texto','Precio de venta Unitario:')}} 
			{{Form::text('precio_venta', 0, array('class' => 'form-control','onblur'=>'utilidad(this.value)','readonly')) }} <br>
		</div>
	</div>
		<br><br>
		{{Form::submit('Almacenar', array('class' => 'btn btn-success')) }}<p>
	{{Form::close()}}
@endsection

@section('script')
	<script src="css/bootstrap/js/bootstrap.js"></script>
@endsection