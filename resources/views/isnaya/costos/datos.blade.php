@extends('isnaya/template/main')

@section('title')
	Calcular
@endsection
	
@section('contenido')
	<div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-10"> 
        <div class="row">
          <div class="col-md-8">
            <h4>
              Nueva Proforma
            </h4>
            <hr>
          </div>
        </div>
				<!-- Nav tabs -->
  			<ul class="nav nav-tabs" role="tablist">
    			<li role="presentation" class="active">
    				<a href="#general" aria-controls="general" role="tab" data-toggle="tab">Datos Generales</a>
    			</li>
    			<li role="presentation">
    				<a href="#especificos" aria-controls="especificos" role="tab" data-toggle="tab">Datos especificos</a>
    			</li>
    			<li role="presentation">
    				<a href="#adicionales" aria-controls="adicionales" role="tab" data-toggle="tab">Datos Adicionales</a>
    			</li>
  			</ul>	
  			<!-- Tab panes -->
  			<div class="tab-content">
  				<!-- Inicio de la primer Tab -->
    			<div role="tabpanel" class="tab-pane active pestania" id="general">
    				<div class="container">
							<div class="col-md-7" style="border-right: 1px solid #D9D7D7;">
								<h5>Datos Generales del Cliente</h5>
                <div class="row">
								  <div class="col-md-8">
									  {!! Form::label('Cliente:')!!}<br>
                    {!! Field::select('',['id'=>'id_cliente'])!!}
                    {!! Field::text('Solicitante:')!!}
                    <div class="row">
                      <div class="col-md-6">
                        <label for="">Telefono:</label> <br>
                        <div class="input-group">
                          <span class="input-group-addon" id="sizing-addon1">+505 </span>
                          <input type="text" class="form-control" placeholder="Teléfono">
                        </div>
                      </div>
                      <div class="col-md-6">
                        {!! Field::text('fax:',['placeholder'=>'Fax...'])!!}
                      </div>
                    </div>
								  </div>
								  <div class="col-md-4">
									  <br>
									  <button type="button" class="btn btn-info" href="#" data-toggle='modal' data-target='#myModalCreate' style="margin-top: 8px;">
                      Agregar +
                    </button> <br>
                    <br>
                    {!! Field::date('fecha:')!!}
                    {!! Field::date('fecha de Entrega:')!!}
								  </div>
                </div>
							</div>
							<div class="col-md-5">
								<h5>Datos Generales del Proyecto</h5>
                <div class="row">
                  <div class="col-md-7">
                    {!! Form::label('Producto:')!!} <br>
                    {!! Form::select('id_producto',$producto,null,['id'=>'id_producto','class'=>'form-control'])!!}<br>
                    {!! Form::label('Formato:')!!} <br>
                    {!! Form::select('id_producto',$formato,null,['id'=>'id_producto','class'=>'form-control'])!!}
                    {!! Field::checkbox('Formato Personalizado:','1')!!}
                    {!! Field::text(null,['placeholder'=>'Ingrese el formato personalizado','id' => 'formatopers'])!!}
                  </div>
                  <div class="col-md-4">
                    {!! Field::text('volumen:', ['placeholder'=>'Volumen'])!!}
                    {!! Form::label('caras:')!!} <br>
                    <select name="" id="" class="form-control" style="margin-top: 3px;">
                      <option value="1">1 Cara</option>
                      <option value="2">2 Caras</option>
                    </select>
                  </div>
                </div>
                <!-- Boton de navegación -->
                <button type="button" class="btn btn-info navbar-right" style="margin-top:10px; margin-bottom: 15px; margin-right: 15px;" href="#especificos" 
                  aria-controls="especificos" role="tab" data-toggle="tab">
                  Siguiente <span class="glyphicon glyphicon-triangle-right"></span>
                </button>
							</div>
            </div>
					</div>
					<!-- Fín de la primer Tab -->
					<div role="tabpanel" class="tab-pane pestania" id="especificos">
		        <div class="container-fluid">
              <div class="col-md-6" style="border-right: 1px solid #D9D7D7;">
                <h5>Material de la Portada</h5>
                <div class="row">
                  <div class="col-md-4">
                    {!! Field::text('Nº Páginas:', ['placeholder'=>'Nº de Páginas'])!!}
                  </div>
                  <div class="col-md-4">
                    {!! Form::label('Tipo de material:')!!} <br>
                    {!! Form::select('id_rubro',$rubros,null,['id'=>'id_rubro','class'=>'form-control'])!!}
                  </div>
                  <div class="col-md-4">
                    {!! Form::label('Color:')!!}
                    {!! Form::select('id_color',$colores,null,['id'=>'id_color','class'=>'form-control'])!!}
                  </div> 
                </div>
                <h5>Materiales del cuerpo</h5>
                <div class="row">
                  <!-- Material del cuerpo -->
                  <div class="col-md-3">
                    {!! Form::label('Nº Páginas:')!!}
                    {!! Form::text('Nº Páginas:', null,['placeholder'=>'Nº de Páginas','class'=>'form-control'])!!}
                    {!! Form::label('Nº Páginas:')!!}
                    {!! Form::text('Nº Páginas:', null,['placeholder'=>'Nº de Páginas','class'=>'form-control'])!!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Material 1:')!!} 
                    {!! Form::select('id_rubro',$rubros,null,['id'=>'id_rubro','class'=>'form-control'])!!}
                    {!! Form::label('Material 3:')!!}
                    {!! Form::select('id_rubro',$rubros,null,['id'=>'id_rubro','class'=>'form-control'])!!}
                  </div> 
                  <div class="col-md-3">
                    {!! Form::label('Nº Páginas:')!!}
                    {!! Form::text('Nº Páginas:', null,['placeholder'=>'Nº de Páginas','class'=>'form-control'])!!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Material 2:')!!} 
                    {!! Form::select('id_rubro',$rubros,null,['id'=>'id_rubro','class'=>'form-control'])!!}
                  </div> 
                </div>
              </div>
              <!-- separación de las dos columnas -->
              <div class="col-md-6">
                <h5>Colores de las páginas del cuerpo</h5>
                <div class="row">
                  <div class="col-md-3 col-sm-6"> 
                    {!! Form::label('Nº Páginas:')!!}           
                    {!! Form::text('Páginas:', null,['placeholder' => 'Nº Páginas', 'class'=>'form-control'])!!} 
                    {!! Form::label('Nº Páginas:')!!}                 
                    {!! Form::text('Páginas:', null,['placeholder' => 'Nº Páginas', 'class'=>'form-control'])!!}
                  </div>
                  <div class="col-md-3 col-sm-6">
                    {!! Form::label('Color:')!!}
                    {!! Form::select('id_color',$colores,null,['id'=>'id_color','class'=>'form-control'])!!}
                    {!! Form::label('Color:')!!}
                    {!! Form::select('id_color',$colores,null,['id'=>'id_color','class'=>'form-control'])!!}
                  </div>
                  <div class="col-md-3 col-sm-6"> 
                    {!! Form::label('Nº Páginas:')!!} 
                    {!! Form::text('Páginas:', null,['placeholder' => 'Nº Páginas', 'class'=>'form-control'])!!} 
                    {!! Form::label('Nº Páginas:')!!} 
                    {!! Form::text('Páginas:', null,['placeholder' => 'Nº Páginas', 'class'=>'form-control'])!!}
                  </div>
                  <div class="col-md-3 col-sm-6"> 
                    {!! Form::label('Color:')!!}
                    {!! Form::select('id_color',$colores,null,['id'=>'id_color','class'=>'form-control'])!!}
                    {!! Form::label('Color:')!!}
                    {!! Form::select('id_color',$colores,null,['id'=>'id_color','class'=>'form-control'])!!}
                  </div>
                  <div class="col-md-3 col-sm-6"> 
                    {!! Form::label('Nº Páginas:')!!} 
                    {!! Form::text('Páginas:', null,['placeholder' => 'Nº Páginas', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3 col-sm-6"> 
                    {!! Form::label('Color:')!!}
                    {!! Form::select('id_color',$colores,null,['id'=>'id_color','class'=>'form-control'])!!}
                  </div>
                  <div class="col-md-3 col-sm-6"> 
                    {!! Form::label('Nº Páginas:')!!} 
                    {!! Form::text('Páginas:', null,['placeholder' => 'Nº Páginas', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3 col-sm-6"> 
                    {!! Form::label('Color:')!!}
                    {!! Form::select('id_color',$colores,null,['id'=>'id_color','class'=>'form-control'])!!}
                  </div>
                </div>
                <!-- Boton de navegación -->
                <div class="col-md-12">
                  <div class="row">
                    <button type="button" class="btn btn-info navbar-right" style="margin-top:50px; margin-bottom: 15px; margin-right: -15px;" href="#adicionales"
                      aria-controls="adicionales" role="tab" data-toggle="tab">
                      Siguiente <span class="glyphicon glyphicon-triangle-right"></span>
                    </button>
                    <button type="button" class="btn btn-info navbar-right" style="margin-top: 50px;margin-right: 15px; padding: 9px" href="#general" aria-controls="general"
                       role="tab" data-toggle="tab">
                      <span class="glyphicon glyphicon-triangle-left"> Atrás</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
					</div>
					<!-- Fín de la segunda Tab -->
					<div role="tabpanel" class="tab-pane pestania" id="adicionales">
            <div class="container-fluid">
              <div class="col-md-6">
                <h5>Encuadernación</h5>
                <div class="row">
                  <div class="col-md-4">
                    {!! Field::checkbox('Grapado')!!}
                  </div>
                  <div class="col-md-4">        
                    {!! Field::checkbox('Granel') !!}
                  </div>
                  <div class="col-md-4">  
                    {!! Field::checkbox('Encolado/Encolochado')!!}
                  </div>                
                  <div class="col-md-4">        
                    {!! Field::checkbox('Barniz ultavioleta')!!}
                  </div>
                  <div class="col-md-4">        
                    {!! Field::checkbox('Plasticado')!!}
                  </div>
                </div>
              </div>
              <div class="col-md-6" style="border-left: 1px solid #D9D7D7;">
                <h5>Arte y Diseño</h5>
                <div class="row">
                  <div class="col-md-6"> 
                    {!! Form::label('Imprenta:')!!}        
                    {{  Form::radio('rimprenta','1')}}
                  </div>
                  <div class="col-md-6">
                    {!! Form::label('Cliente:')!!} 
                    {{ Form::radio('rcliente', '1',true)}}   
                  </div>
                  <div class="col-md-12">
                    {!! Form::label('Otros datos:')!!} 
                    <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
                  </div> 
                </div>
                <!-- Boton de navegación -->
                <div class="col-md-12">
                  <div class="row">
                    <button type="button" class="btn btn-info navbar-right" style="margin-top:25px; margin-bottom: 15px; margin-right: -15px;" href="#"
                      aria-controls="" role="tab" data-toggle="tab">
                      Calcular <span class="glyphicon glyphicon-triangle-right"></span>
                    </button>
                    <button type="button" class="btn btn-info navbar-right" style="margin-top: 25px;margin-right: 15px; padding: 9px" href="#especificos"
                      aria-controls="especificos" role="tab" data-toggle="tab">
                      <span class="glyphicon glyphicon-triangle-left"> Atrás</span>
                    </button>
                  </div>
                </div>
                <!-- Fín de los botones -->
              </div>
            </div>
					</div>
          <!-- Fín de la tercera Tab -->
				</div>
      </div>
    </div>
	</div>
@endsection

@include('isnaya.clientes.modalcreate')
@section('script')
  <script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
  <script>
    listarClientes();
  </script>
@endsection