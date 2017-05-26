@extends('isnaya/template/main')

@section('title')
	Calcular
@endsection
	
@section('contenido')
	<div class="row">
		<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
  		<!-- Nav tabs -->
  		<ul class="nav nav-tabs" role="tablist">
    		<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Datos Generales</a></li>
    		<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Datos especificos</a></li>
    		<li role="presentation"><a href="#otros" aria-controls="otros" role="tab" data-toggle="tab">Otros Datos</a></li>
    		<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Cálculos</a></li>
        <li role="presentation"><a href="#costo" aria-controls="costo" role="tab" data-toggle="tab">Mano de Obra</a></li>
        <li role="presentation"><a href="#totales" aria-controls="totales" role="tab" data-toggle="tab">Totales</a></li>
  		</ul>	
  		<!-- Tab panes -->
  		<div class="tab-content">
      <!-- Inicio de la primer Tab -->
    		<div role="tabpanel" class="tab-pane active" id="home">
					<div class="panel panel-info">
            <div class="panel-heading">
              <h4>
                <center>Datos Generales del Cliente</center>
              </h4>
            </div>
  					<div class="panel-body container">
              <div class="col-md-11">
                <div class="row">
                  <div class="col-md-5">
                    {!! Field::date('fecha:', ['id' => 'fecha'])!!}
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    {!! Form::label('Clientes:')!!} <br>
                    {!!form::select('id_cliente',$clientes,null,['id'=>'id_cliente','class'=>'form-control'])!!}
                    {!! Field::text('telefono:', ['id' => 'telefono', 'placeholder'=>'Ingrese el teléfono'])!!}
                  </div>
                  <div class="col-md-5">
                    {!! Field::text('solicitante:', ['id' => 'solicitante', 'placeholder'=>'Ingrese el solicitante'])!!}
                    {!! Field::text('fax:', ['id' => 'fax', 'placeholder'=>'Ingrese el fax'])!!}
                  </div>
                  <div class="col-md-2">
                    <button type="button" class="btn btn-info navbar-right" style="margin-top: 10px;margin-right: 15px;" href="#" data-toggle='modal' data-target='#myModalCreate'>
                      Agregar Cliente
                    </button>
                  </div>
                </div>
                <div class="panel-heading">
                  <h4>
                    <center>Datos Generales del Proyecto</center>
                  </h4>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    {!! Form::label('Tipo de producto:')!!} <br>
                    {!!form::select('id_producto',$producto,null,['id'=>'id_producto','class'=>'form-control'])!!}
                    {!! Field::text('volumen:', ['placeholder'=>'Volumen'])!!}
                    {!! Field::select('caras:', ['1' =>'1 Cara','2' => '2 Caras'])!!}
                  </div>
                  <div class="col-md-6">
                    {!! Form::label('Formatos:')!!} <br>
                    {!!form::select('id_producto',$formato,null,['id'=>'id_producto','class'=>'form-control'])!!}
                    {!! Field::checkbox('Formato Personalizado:','1'), Field::text(null,['placeholder'=>'Ingrese el formato personalizado','id' => 'formatopers'])!!}
                  </div>
                  <!-- Boton de navegación -->
                  <button type="button" class="btn btn-info navbar-right" style="margin-top: 10px;margin-right: 15px;" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                      Siguiente <span class="glyphicon glyphicon-menu-right"></span>
                  </button>

                </div>
                <br>
              </div>
            </div>
          </div>
				</div>
        <!-- Fín de la primer Tab -->
    		<div role="tabpanel" class="tab-pane" id="profile">
    			<div class="panel panel-info">
  					<div class="panel-heading">
    					<h4>
                <center>Datos Especificos</center>
              </h4>
  					</div>
  					<div class="panel-body container">
              <div class="col-md-11">
    					 <h4>
                  <center>Material de la portada</center>
                </h4>
                <div class="col-md-4">
                  {!! Field::text('Material de portada:', ['placeholder'=>'Nº de Páginas'])!!}
                </div>
                <div class="col-md-4">
                  {!! Form::label('Tipo de material:')!!} <br>
                  {!! Form::select('id_rubro',$rubros,null,['id'=>'id_rubro','class'=>'form-control'])!!}
                </div>
                <div class="col-md-4">
                  {!! Field::select('Color:')!!}
                </div>
                <h4>
                  <center>Material del cuerpo</center>
                </h4>
                <div class="col-md-6">
                  {!! Field::text('Material de cuerpo 1:', ['placeholder'=>'Nº de Páginas'])!!}
                  {!! Field::text('Material de cuerpo 3:', ['placeholder'=>'Nº de Páginas'])!!}
                  {!! Field::text('Material de cuerpo 2:', ['placeholder'=>'Nº de Páginas'])!!}
                </div>
                <div class="col-md-6">
                  {!! Form::label('Tipo de material 1:')!!}
                  {!! Form::select('id_rubro1',$rubros,null,['id'=>'id_rubro1','class'=>'form-control'])!!} <br>
                  {!! Form::label('Tipo de material 2:')!!}
                  {!! Form::select('id_rubro2',$rubros,null,['id'=>'id_rubro2','class'=>'form-control'])!!} <br>
                  {!! Form::label('Tipo de material 3:')!!}
                  {!! Form::select('id_rubro3',$rubros,null,['id'=>'id_rubro3','class'=>'form-control'])!!} <br>
                </div>
                <h4>                       
                  <center>
                    Colores de las páginas del cuerpo
                  </center>
                </h4>
                <div class="col-md-2 col-sm-6">             
                  {!! Field::text('Páginas:', ['placeholder' => 'Nº Páginas'])!!}                   
                  {!! Field::text('Páginas:', ['placeholder' => 'Nº Páginas'])!!}
                </div>
                <div class="col-md-2 col-sm-6">
                  <br>{!! Form::select('id_color',$colores,null,['id'=>'id_color','class'=>'form-control'])!!} <br>
                  <br>{!! Form::select('id_color',$colores,null,['id'=>'id_color','class'=>'form-control'])!!} <br>
                </div>
                <div class="col-md-2 col-sm-6"> 
                  {!! Field::text('Páginas:', ['placeholder' => 'Nº Páginas'])!!} 
                  {!! Field::text('Páginas:', ['placeholder' => 'Nº Páginas'])!!}
                </div>
                <div class="col-md-2 col-sm-6"> 
                  <br>{!! Form::select('id_color',$colores,null,['id'=>'id_color','class'=>'form-control'])!!} <br>
                  <br>{!! Form::select('id_color',$colores,null,['id'=>'id_color','class'=>'form-control'])!!} <br>
                </div>
                <div class="col-md-2 col-sm-6">
                  {!! Field::text('Páginas:', ['placeholder' => 'Nº Páginas'])!!}             
                  {!! Field::text('Páginas:', ['placeholder' => 'Nº Páginas'])!!}             
                </div>                      
                <div class="col-md-2 col-sm-6"> 
                  <br>{!! Form::select('id_color',$colores,null,['id'=>'id_color','class'=>'form-control'])!!} <br>
                  <br>{!! Form::select('id_color',$colores,null,['id'=>'id_color','class'=>'form-control'])!!} 
                </div>

  					  </div>
              <div class="col-md-11">
                <div class="row">
                  <!-- Botones de navegación -->
                  <button type="button" class="btn btn-info navbar-right" style="margin-right: 15px;" href="#otros" aria-controls="otros" role="tab" data-toggle="tab">   Siguiente 
                    <span class="glyphicon glyphicon-menu-right"></span>
                  </button>
                  <button type="button" class="btn btn-info navbar-right" style="margin-right: 15px; padding: 9px" href="#home" aria-controls="home" role="tab" data-toggle="tab">
                    <span class="glyphicon glyphicon-menu-left"> Atrás</span>
                  </button>
                  <!-- Fín de los botones -->
                </div>
              </div>

            </dssiv>
					</div>
    		</div>
        <!-- Fín de la segunda Tab -->
    		<div role="tabpanel" class="tab-pane" id="otros">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h4>
                <center>Encuadernación</center>
              </h4>
            </div>
            <div class="panel-body container">
              <div class="col-md-10 col-md-offset-1">  
                <div class="row">  
                  <div class="col-md-6">            
                    <div class="col-md-3">
                      {!! Field::checkbox('Grapado')!!}
                    </div>
                    <div class="col-md-3">        
                      {!! Field::checkbox('Granel') !!}
                    </div>
                    <div class="col-md-3">  
                      {!! Field::checkbox('Encolado/Encolochado')!!}
                    </div>                
                    <div class="col-md-6">        
                      {!! Field::checkbox('Barniz ultavioleta')!!}
                    </div>
                    <div class="col-md-4">        
                      {!! Field::checkbox('Plasticado')!!}
                    </div> 
                  </div>

                  <div class="col-md-6">
                    <h4>  
                      Arte y Diseño
                    </h4>
                    <div class="col-md-6">         
                    {!! Field::radio('Imprenta')!!}
                    </div>                
                    <div class="col-md-6"> 
                      {!! Field::radio('Cliente')!!}  
                    </div> 
                  </div>
                  <div class="col-md-8 col-md-offset-2">
                    {!! Field::textarea('Otros datos:')!!}       
                  </div>
                </div>
                <div class="row">
                <!-- Botones de navegación -->
                  <button type="button" class="btn btn-info navbar-right" style="margin-top: 10px;margin-right: 25px;" href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
                  Siguiente <span class="glyphicon glyphicon-menu-right"></span>
                  </button>

                  <button type="button" class="btn btn-info navbar-right" style="margin-top: 10px;margin-right: 15px;" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                    <span class="glyphicon glyphicon-menu-left"> Atrás</span>
                  </button>
                  <!-- Fín de los botones -->
                </div>
              </div>
            </div>
          </div>                                     
    		</div>
        <!-- Fín de la tabs 3-->
    		<div role="tabpanel" class="tab-pane" id="settings">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h4>
                <center>Costos de papel</center>
              </h4>
            </div>
            <div class="panel-body container">
              <div class="col-md-10 col-md-offset-1">
                <br>
                <h5>
                    <center><b>Costos de papel 1</b></center>
                </h5>
                <div class="col-md-3">
                  {!! Field::text('Material:') !!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Volumen:') !!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Costo Unitario:') !!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Costo Total:') !!}
                </div>
                <br>
                <h5>
                  <center><b>Costos de papel 2</b></center>
                </h5>
                <div class="col-md-3">
                  {!! Field::text('Material:') !!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Volumen:') !!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Costo Unitario:') !!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Costo Total:') !!}
                </div>
                <br>
                <h5>
                  <center><b>Costos de papel 3</b></center>
                </h5>
                <div class="col-md-3">
                  {!! Field::text('Material:') !!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Volumen:') !!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Costo Unitario:') !!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Costo Total:') !!}
                </div>


                <div class="panel-heading">
                  <h4>
                    <center>Costos de Portada</center>
                  </h4>
                </div>
                <div class="col-md-3">
                  {!! Field::text('Material:') !!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Volumen:') !!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Costo Unitario:') !!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Costo Total:') !!}
                </div>
                <!-- Separación-->
                <div class="col-md-3">
                  {!! Field::text('separación de colores:', ['placeholder' => '0'])!!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Arte, diseño y diagramacion:',  ['placeholder' => '0'])!!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Levantado de texto:',['placeholder' => '0'])!!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('electrostático o Láser:', ['placeholder' => '0'])!!}
                </div>
                <!-- Separación-->
                <div class="panel-heading">
                  <h4>
                    <center>Costos de Láminas y Tintas offset</center>
                  </h4>
                </div>
                <div class="col-md-3">
                  {!! Field::text('Volumen lámina:') !!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Costo Unitario:') !!}
                </div>
                 <div class="col-md-3">
                  {!! Field::text('Costo Total:') !!}
                </div>
                <div class="col-md-3">
                  {!! Field::text('Tintas offset:') !!}
                </div>

                <div class="row">
                <!-- Botones de navegación -->
                  <button type="button" class="btn btn-info navbar-right" style="margin-top: 10px;margin-right: 25px;" href="#costo" aria-controls="costo" role="tab" data-toggle="tab">
                  Siguiente <span class="glyphicon glyphicon-menu-right"></span>
                  </button>

                  <button type="button" class="btn btn-info navbar-right" style="margin-top: 10px;margin-right: 15px;" href="#otros" aria-controls="otros" role="tab" data-toggle="tab">
                    <span class="glyphicon glyphicon-menu-left"> Atrás</span>
                  </button>
                  <!-- Fín de los botones -->
                </div>
              </div><!-- Fín del col-md-10 -->
            </div>
          </div>
        </div><!-- Fín de la tab -->
        <div role="tabpanel" class="tab-pane" id="costo">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h4>
                <center>Costos de Mano de Obra</center>
              </h4>
            </div>
            <div class="panel-body container">
              <div class="col-md-10 col-md-offset-1">
                <div class="row">
                  <h4>
                    <b>M.O. Fotomecánica:</b> 
                  </h4>
                  <div class="col-md-3">
                    {!! Field::text('Volumen:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Costo Unitario:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Costo Total:') !!}
                  </div>
                </div>
                <!-- separacion de los row  -->
                <div class="row">
                  <h4>
                    <b>M.O. Impresion offset:</b> 
                  </h4>
                  <div class="col-md-3">
                    {!! Field::text('Volumen:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Costo Unitario:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Costo Total:') !!}
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                      {!! Field::text('Fotocopia B/N:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Corte:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Compaginacion:') !!}
                  </div>
                </div>
                <!-- separacion de los row -->
                <div class="row">
                  <h4>
                    <b>Grapado:</b>
                  </h4>
                  <div class="col-md-3">
                    {!! Field::text('Volumen:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Costo Unitario:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Costo Total:') !!}
                  </div>
                </div>
                <!-- separacion de los row  -->
                <div class="row">
                  <h4>
                    <b>Encolado/Encolochado:</b>
                  </h4>
                  <div class="col-md-3">
                    {!! Field::text('Volumen:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Costo Unitario:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Costo Total:') !!}
                  </div>
                </div>
                <!-- separacion de los row  -->
                <div class="row">
                  <h4>
                    <b>Cocido:</b>
                  </h4>
                  <div class="col-md-3">
                    {!! Field::text('Volumen:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Costo Unitario:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Costo Total:') !!}
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    {!! Field::text('Numerado:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Troquelado:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Plastificado:') !!}
                  </div>    
                  <div class="col-md-3">
                    {!! Field::text('Otros') !!}
                  </div>             
                </div>
                <!-- Fin de la separaciond los costes -->
                <div class="row">
                  <!-- Botones de navegación -->
                  <button type="button" class="btn btn-info navbar-right" style="margin-top: 10px;margin-right: 25px;" href="#totales" aria-controls="totales" role="tab" data-toggle="tab">
                  Siguiente <span class="glyphicon glyphicon-menu-right"></span>
                  </button>
                  <button type="button" class="btn btn-info navbar-right" style="margin-top: 10px;margin-right: 15px;" href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
                    <span class="glyphicon glyphicon-menu-left"> Atrás</span>
                  </button>
                  <!-- Fín de los botones -->
                </div>
              </div><!-- Fín del col-md-10 -->
            </div>
          </div>
        </div><!-- Fín de la tab -->
        <div role="tabpanel" class="tab-pane" id="totales">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h4>
                <center>Costos Totales</center>
              </h4>
            </div>
            <div class="panel-body container">
              <div class="col-md-10 col-md-offset-1">  
                <div class="row">
                  <div class="col-md-3">
                    {!! Field::text('Sub total:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Gastos:') !!}
                  </div>
                  <div class="col-md-3">
                    {!! Field::text('Costo Total:') !!}
                  </div>    
                  <div class="col-md-3">
                    {!! Field::text('Utilidad Bruta:') !!}
                  </div> 
                </div>
                <div class="row">
                  <div class="col-md-3">
                    {!! Field::checkbox('IVA:')!!}
                    {!!Field::text('')!!}
                  </div>    
                </div>
                <div class="row">
                  <div class="col-md-3">
                    {!! Field::text('Valor de venta Total:') !!}
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    {!! Field::text('Precio de venta Unitario:') !!}
                  </div> 
                </div>
                <div class="row">
                <!-- Botones de navegación -->
                  <button type="button" class="btn btn-danger navbar-right" style="margin-top: 10px;margin-right: 25px;" href="">
                    Almacenar
                  </button>
                  <button type="button" class="btn btn-info navbar-right" style="margin-top: 10px;margin-right: 15px;" href="#costo" aria-controls="costo" role="tab" data-toggle="tab">
                    <span class="glyphicon glyphicon-menu-left"> Atrás</span>
                  </button>
                  <!-- Fín de los botones -->
                </div>
              </div>
            </div>
          </div>                                     
        </div>
        <!-- Fín de la tabs 3-->

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