@extends('isnaya/template/main')

@section('title')
	Calcular
@endsection
	
@section('contenido')
	<div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12"> 
        <div class="row cabecera-mag">
          <div class="col-md-6">
            <h4>
              Nueva Proforma
            </h4>
            <hr>
          </div>
          <div class="col-md-6">
            <!-- Aqui la lista de pasos 
                  <ul class="">
                     <li class="">
                        <span>1</span>
                     </li>
                     <li class="">
                        <span>2</span>
                     </li>
                     <li class="">
                        <span>3</span>
                     </li>
                     <li class="">
                        <span>calculo</span>
                     </li>
                  </ul>-->
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
          <li role="presentation">
            <a href="#calculos" aria-controls="calculos" role="tab" data-toggle="tab">Cálculos</a>
          </li>
  			</ul>	
  			<!-- Tab panes -->
  			<div class="tab-content">
          <div role="tabpanel" class="tab-pane active pestania" id="general">
            <div class="container">
              
            </div>
          </div>
        </div>
  				<!-- Inicio de la primer Tab -->
    			<div role="tabpanel" class="tab-pane active pestania" id="general">
    				<div class="container">
							<div class="col-md-7 col-sm-7" style="border-right: 1px solid #D9D7D7;">
								<h5>Datos Generales del Cliente</h5>
                <div class="row">
								  <div class="col-md-8">
									  {!! Form::label('Cliente:')!!}<br>
                    <select id="id_cliente" class="form-control">
                      @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}  {{ $cliente->apellido }}</option>
                      @endforeach
                    </select>
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
									  <button type="button" class="btn btn-info btn-cian-big btn-responsive" href="#" data-toggle='modal' data-target='#myModalCreate' style="margin-top: 8px;">
                      Agregar +
                    </button> <br>
                    <br>
                    {!! Field::date('fecha:')!!}
                    {!! Field::date('fecha de Entrega:')!!}
								  </div>
                </div>
							</div>
							<div class="col-md-5 col-sm-5">
								<h5>Datos Generales del Proyecto</h5>
                <div class="row">
                  <div class="col-md-7">
                    {!! Form::label('Producto:')!!} <br>
                    {!! Form::select('id_producto',$producto,null,['id'=>'id_producto','class'=>'form-control'])!!}<br>
                    {!! Form::label('Formato:')!!} <br>
                    {!! Form::select('id_formats',$formato,null,['id'=>'id_formats','class'=>'form-control'])!!}
                    {!! Field::checkbox('Formato Personalizado:','1')!!}
                    {!! Field::text(null,['placeholder'=>'Ingrese el formato personalizado','id' => 'formatopers'])!!}
                  </div>
                  <div class="col-md-4">
                    {!! Field::text('volumen:', ['id' => 'vol_total','placeholder'=>'Volumen'])!!}
                    {!! Form::label('caras:')!!} <br>
                    <select name="" id="" class="form-control" style="margin-top: 3px;">
                      <option value="1">1 Cara</option>
                      <option value="2">2 Caras</option>
                    </select>
                  </div>
                  <div>
                    <!-- Boton de navegación --> 
                    <button type="button" class="btn btn-info navbar-right" href="#especificos" aria-controls="especificos" role="tab" data-toggle="tab" style="margin-top:10px; margin-bottom: 15px; margin-right: 15px;">
                    Siguiente <span class="glyphicon glyphicon-triangle-right"></span>
                    </button>
							    </div>
                </div>
					</div>
					<!-- Fín de la primer Tab -->
					<div role="tabpanel" class="tab-pane pestania" id="especificos">
		        <div class="container-fluid">
            {{-- Sección de datos de calculos--}} 
              <div class="col-md-6 col-sm-6">
                <h5>Material de la Portada</h5>
                <div class="row">
                  <div class="col-md-4">
                    {!! Field::text('Nº Páginas:', ['id'=>'canPapelP' ,'placeholder'=>'Nº de Páginas'])!!}
                  </div>
                  <div class="col-md-4">
                    {!! Form::label('Material:')!!} 
                    <select id="id_rubro" class="form-control">
                      @foreach($rubros as $rubro)
                        <option value="{{ $rubro->id }}">{{ $rubro->descripcion }}</option>
                      @endforeach
                   </select> 
                  </div>
                  <div class="col-md-4">
                    {!! Form::label('Color:')!!}
                    {!! Form::select('id_color',$colores,null,['id'=>'id_color','class'=>'form-control'])!!}
                  </div> 
                </div>
                {{-- separación --}}
                <hr>
                <h5>Materiales del cuerpo</h5>
                <div class="row">
                  <div class="col-md-3">
                    {!! Form::label('Nº Páginas:')!!}
                    {!! Form::text('Nº Páginas:', null,['id'=>'cantPapel1','placeholder'=>'Nº de Páginas','class'=>'form-control'])!!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Material 1:')!!}
                    <select id="id_rubro1" class="form-control">
                      @foreach($rubros as $rubro)
                        <option value="{{ $rubro->id }}">{{ $rubro->descripcion }}</option>
                      @endforeach
                    </select>
                  </div> 
                  <div class="col-md-3">
                    {!! Form::label('Nº Páginas:')!!}
                    {!! Form::text('Nº Páginas:', null,['id'=>'cantPapel2','placeholder'=>'Nº de Páginas','class'=>'form-control'])!!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Material 2:')!!}
                    <select id="id_rubro2" class="form-control">
                      @foreach($rubros as $rubro)
                        <option value="{{ $rubro->id }}">{{ $rubro->descripcion }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-3">
                    {!! Form::label('Nº Páginas:')!!}
                    {!! Form::text('Nº Páginas:', null,['id'=>'cantPapel3','placeholder'=>'Nº de Páginas','class'=>'form-control'])!!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Material 3:')!!} 
                    <select id="id_rubro3" class="form-control">
                      @foreach($rubros as $rubro)
                        <option value="{{ $rubro->id }}">{{ $rubro->descripcion }}</option>
                      @endforeach
                    </select>
                </div>
              <!-- separación de las dos columnas -->
              <div class="col-md-6 col-sm-6" style="border-left: 1px solid #D9D7D7;">
                <h5>Colores de las páginas del cuerpo</h5>
                <div class="row">
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
                <hr>
                <div class="row">
                  <div class="col-md-3 col-sm-6"> 
                    {!! Form::label('Nº Páginas:')!!} 
                    {!! Form::text('Páginas:', null,['placeholder' => 'Nº Páginas', 'class'=>'form-control'])!!} 
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
                <hr>
                <!-- Boton de navegación -->
                <div class="col-md-12">
                  <div class="row">
                    <button type="button" class="btn btn-info btn-cian navbar-right" style="margin-top:50px; margin-bottom: 15px; margin-right: -15px;" href="#adicionales"
                      aria-controls="adicionales" role="tab" data-toggle="tab">
                      Siguiente <span class="glyphicon glyphicon-triangle-right"></span>
                    </button>
                    <button type="button" class="btn btn-info btn-cian navbar-right" style="margin-top: 50px;margin-right: 15px;" href="#general" aria-controls="general"
                       role="tab" data-toggle="tab">
                      <span class="glyphicon glyphicon-triangle-left"></span>Atrás
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
                    <button type="button" class="btn btn-info btn-cian navbar-right" style="margin-top:25px; margin-bottom: 15px; margin-right: -15px;" href="#calculos"
                      aria-controls="calculos" role="tab" data-toggle="tab">
                      Calcular <span class="glyphicon glyphicon-triangle-right"></span>
                    </button>
                    <button type="button" class="btn btn-info btn-cian navbar-right" style="margin-top:25px; margin-right: 15px;" href="#especificos"
                      aria-controls="especificos" role="tab" data-toggle="tab">
                      <span class="glyphicon glyphicon-triangle-left"></span>Atrás
                    </button>
                  </div>
                </div>
                <!-- Fín de los botones -->
              </div>
            </div>
		      </div>
          <!-- Fín de la tercera Tab -->
          <div role="tabpanel" class="tab-pane pestania" id="calculos">
            <div class="container-fluid">
              <div class="col-md-6">
                <h5>Costos de papel</h5>
                <div class="row">
                  <h5 class="tit-cal">costo de papel Nº 1</h5>
                  <div class="col-md-3">
                    {!! Form::label('Material:')!!} 
                    {!! Form::text('', null,['id' => 'Mat1', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Volumen:')!!} 
                    {!! Form::text('', null,['id' => 'vol1', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Costo Unitario:')!!} 
                    {!! Form::text('', null,['id' => 'cotunit1', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Costo Total:')!!} 
                    {!! Form::text('', null,['id' => 'costotal1', 'class'=>'form-control', 'disabled'])!!} 
                  </div>
                </div> <!-- Separación-->
                <hr>
                <div class="row">
                  <h5 class="tit-cal">costo de papel Nº 2</h5>
                  <div class="col-md-3">
                    {!! Form::label('Material:')!!} 
                    {!! Form::text('', null,['id' => 'Mat2', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Volumen:')!!} 
                    {!! Form::text('', null,['id' => 'vol2', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Costo Unitario:')!!} 
                    {!! Form::text('', null,['id' => 'cotunit2', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Costo Total:')!!} 
                    {!! Form::text('', null,['id' => 'costotal2', 'class'=>'form-control', 'disabled'])!!} 
                  </div>
                </div> <!-- Separación-->
                <hr>
                <div class="row">
                  <h5 class="tit-cal">costo de papel Nº 3</h5>
                  <div class="col-md-3">
                    {!! Form::label('Material:')!!} 
                    {!! Form::text('', null,['id' => 'Mat3', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Volumen:')!!} 
                    {!! Form::text('', null,['id' => 'vol3', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Costo Unitario:')!!} 
                    {!! Form::text('', null,['id' => 'cotunit3', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Costo Total:')!!} 
                    {!! Form::text('', null,['id' => 'costotal3', 'class'=>'form-control', 'disabled'])!!} 
                  </div>
                </div> <!-- Separación-->
              </div>
              <div class="col-md-6" style="border-left: 1px solid #D9D7D7;">
                <h5>Costos de Portada</h5>
                <div class="row">
                  <h5 class="tit-cal">Portada</h5>
                  <div class="col-md-3">
                    {!! Form::label('Material:')!!} 
                    {!! Form::text('', null,['id' => 'Matpor', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Volumen:')!!} 
                    {!! Form::text('', null,['id' => 'volport', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Costo Unitario:')!!} 
                    {!! Form::text('', null,['id' => 'cotunitport', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Costo Total:')!!} 
                    {!! Form::text('', null,['id' => 'costotalport', 'class'=>'form-control', 'disabled'])!!} 
                  </div>
                </div>
                <hr>
                <div class="row">
                  <!-- Separación-->
                  <div class="col-md-3">
                    {!! Form::label('separación de colores:')!!} 
                    {!! Form::text('', null,['id' => 'sepcolores', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Arte, diseño y diagramacion:')!!} 
                    {!! Form::text('', null,['id' => 'aydis', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Levantado de texto:')!!} 
                    {!! Form::text('', null,['id' => 'levtext', 'class'=>'form-control'])!!} 
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('electrostático o Láser:')!!} 
                    {!! Form::text('', null,['id' => 'electro', 'class'=>'form-control'])!!}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <h5 class="tit-cal">Láminas</h5>
                  <div class="col-md-3">
                    {!! Field::text('Volumen:') !!}
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
                </div>
                <!-- Boton de navegación -->
                <div class="col-md-12">
                  <div class="row">
                    <button type="button" class="btn btn-info btn-cian navbar-right" style="margin-top:25px; margin-bottom: 15px; margin-right: -15px;" href="#manodeobra"
                      aria-controls="manodeobra" role="tab" data-toggle="tab">
                      Siguiente <span class="glyphicon glyphicon-triangle-right"></span>
                    </button>
                    <button type="button" class="btn btn-info btn-cian navbar-right" style="margin-top:25px; margin-right: 15px;" href="#adicionales"
                      aria-controls="adicionales" role="tab" data-toggle="tab">
                      <span class="glyphicon glyphicon-triangle-left"></span>Atrás
                    </button>
                  </div>
                </div>
                <!-- Fín de los botones -->
              </div>
            </div>
          </div>
          <!-- Fín de la cuarta Tab -->
          <!-- Inicio de la 5ta Tab -->
          <div role="tabpanel" class="tab-pane pestania" id="manodeobra">
            <div class="container-fluid">
              <div class="col-md-6" style="border-right: 1px solid #D9D7D7;">
                <h5>Mano de Obra</h5>
                <div class="row">
                    <h5>
                        M.O. Fotomecánica:
                    </h5>
                    <div class="col-md-4">
                        {!! Field::text('Volumen:', ['id' => 'volMOfot']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Field::text('Costo Unitario:', ['id' => 'cosMOfot']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Field::text('Costo Total:', ['id' => 'costotalMOfot']) !!}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h5>
                        M.O. Impresion offset:
                    </h5>
                    <div class="col-md-4">
                        {!! Field::text('Volumen:', ['id' => 'volImOf']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Field::text('Costo Unitario:', ['id' => 'volImOf']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Field::text('Costo Total:', ['id' => 'volImOf']) !!}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        {!! Field::text('Fotocopia B/N:') !!}
                    </div>
                    <div class="col-md-4">
                        {!! Field::text('Corte:') !!}
                    </div>
                    <div class="col-md-4">
                        {!! Field::text('Compaginacion:') !!}
                    </div>
                </div>
              </div>
               <!-- separacion de las columnas-->
              <div class="col-md-6">
                <h5></h5>
                <!-- separacion de los row -->
                <div class="row">
                    <h5>
                        Grapado:
                    </h5>
                    <div class="col-md-4">
                        {!! Field::text('Volumen:') !!}
                    </div>
                    <div class="col-md-4">
                        {!! Field::text('Costo Unitario:') !!}
                    </div>
                    <div class="col-md-4">
                        {!! Field::text('Costo Total:') !!}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h5>
                        Encolado/Encolochado:
                    </h5>
                    <div class="col-md-4">
                        {!! Field::text('Volumen:') !!}
                    </div>
                    <div class="col-md-4">
                        {!! Field::text('Costo Unitario:') !!}
                    </div>
                    <div class="col-md-4">
                        {!! Field::text('Costo Total:') !!}
                    </div>
                </div>
                <hr><!-- separacion de los row  -->
                <div class="row">
                    <h5>
                       Cocido:
                    </h5>
                    <div class="col-md-4">
                        {!! Field::text('Volumen:') !!}
                    </div>
                    <div class="col-md-4">
                        {!! Field::text('Costo Unitario:') !!}
                    </div>
                    <div class="col-md-4">
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
                <!-- Boton de navegación -->
                <div class="col-md-12">
                  <div class="row">
                    <button type="button" class="btn btn-info btn-cian navbar-right" style="margin-top:25px; margin-bottom: 15px; margin-right: -15px;" href="#calculos"
                      aria-controls="calculos" role="tab" data-toggle="tab">
                      Calcular <span class="glyphicon glyphicon-triangle-right"></span>
                    </button>
                    <button type="button" class="btn btn-info btn-cian navbar-right" style="margin-top:25px; margin-right: 15px;" href="#especificos"
                      aria-controls="especificos" role="tab" data-toggle="tab">
                      <span class="glyphicon glyphicon-triangle-left"></span>Atrás
                    </button>
                  </div>
                </div>
                <!-- Fín de los botones -->
              </div>
            </div>
          </div>
          <!-- Fín de la 5ta tab -->
				</div>
			</div>
    </div>
	</div>
@endsection

@include('isnaya.costos.modalcreate')

@section('script')
  <script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
  <script>
    listarClientes();

    //Calculos papel 1
    var volumen1 = $('#vol1');
    var cosun1 = $('#cotunit1');
    var cost1 = $('#costotal1');
    valCostUnit1 = cosun1.val();
    var formato = $('#id_formats');
    var volGeneral = $('#vol_total');
    var cantPapel1 = $('#cantPapel1');
    //seleccion de caras
    var caras = $('#caras');
    caras.on('change', function(){
    var carasval = $('#caras option:selected').val();
    console.log(carasval);
    });
    //seleccion de formato
    formato.on('change', function(){
      var valFormato = $('#id_formats option:selected').text();
      var elemento = valFormato.split('/');
      var tam_pap = elemento[1];
      formato = parseInt(tam_pap);
      console.log(formato);
    });   

    volGeneral.on('change', function(){
      valvoltotal = $(this).val();
      var por_vol =  valvoltotal*1.20;
      console.log(por_vol);
    });

    cantPapel1.on('change', function(){
      papel1 = $(this).val();
      var pagForm=papel1/formato;
      console.log(pagForm);
    });

      var aux=(por_vol*pagForm);
      console.log(aux);
      var total=aux/caras;
      var tot=Math.round(total);
      console.log(tot);
      volumen1.val(tot);
      
      cost1.val(valVol1*valCostUnit1);
      console.log(cost1);
   
    //Función para saber cuando se ha hecho un cambio en el select
    //var volumen1 = $('#vol1');
    //var cosun1 = $('#cotunit1');
    //var cost1= $('#costotal1');
    //volumen1.val(0);
    //var valVol1t = 0;
    ////blur es el evento que permite hacer calculos despues de desenfocar un textbox
    //volumen1.on('blur', function(){
      //valVol1 = $(this).val();
      //valCostUnit1 = cosun1.val();
      //cost1.val(valVol1*valCostUnit1);
    //});

    //Inicio de los calculos de los totales
    //calculos de la portada
    var volumenport = $('#volport');
    var cosunport = $('#cotunitport');
    var costport= $('#costotalport');
    volumenport.val(0);
    var valVolport = 0;
    //blur es el evento que permite hacer calculos despues de desenfocar un textbox
    volumenport.on('blur', function(){
      valVolport = $(this).val();
      valCostUnitport = cosunport.val();
      costport.val(valVolport*valCostUnitport);
    });

    //calculos papel 2
    var volumen2 = $('#vol2');
    var cosun2 = $('#cotunit2');
    var cost2= $('#costotal2');
    volumen2.val(0);
    var valVol2 = 0;
    //blur es el evento que permite hacer calculos despues de desenfocar un textbox
    volumen2.on('blur', function(){
      valVol2 = $(this).val();
      valCostUnit2 = cosun2.val();
      cost2.val(valVol2*valCostUnit2);
    });
    //calculos papel 3
    var volumen3 = $('#vol3');
    var cosun3 = $('#cotunit3');
    var cost3= $('#costotal3');
    volumen3.val(0);
    var valVol3 = 0;
    //blur es el evento que permite hacer calculos despues de desenfocar un textbox
    volumen3.on('blur', function(){
      //console.log (valVol3);
      //console.log($(this).val());
      valVol3 = $(this).val();
      valCostUnit = cosun3.val();
      cost3.val(valVol3*valCostUnit);
      //Console.log permite hacer pruebas y ver el resultado en la consola
      //console.log(valVol3*valCostUnit);
      //console.log(cost3);
      //console.log (valVol3);
    });
  </script>
@endsection