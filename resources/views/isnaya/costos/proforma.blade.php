@extends('isnaya/template/main')

@section('title')
	Calcular
@endsection
	
@section('contenido')
<div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<div class="row cabecera-mag">
				<div class="col-md-6">
					<h4>
                  Nueva Proforma
               </h4>
               <hr>
				</div>
				<div class="col-md-6">
					<!-- Aqui la lista de pasos -->
				</div>
			</div>
  			<!-- Nav tabs -->
  			<ul class="nav nav-tabs" role="tablist">
    			<li role="presentation" class="active">
    				<a href="#general" aria-controls="general" role="tab" data-toggle="tab">
                  Datos Generales
               </a>
    			</li>
    			<li role="presentation">
    				<a href="#especificos" aria-controls="especificos" role="tab" data-toggle="tab">
                  Datos especificos
               </a>
    			</li>
    			<li role="presentation">
    				<a href="#adicionales" aria-controls="adicionales" role="tab" data-toggle="tab">
                  Datos Adicionales
               </a>
    			</li>
            <li role="presentation">
               <a href="#calculos" aria-controls="calculos" role="tab" data-toggle="tab">
                  Costos 
               </a>
            </li>
            <li role="presentation">
               <a href="#manodeobra" aria-controls="manodeobra" role="tab" data-toggle="tab">
                  Mano de Obra
               </a>
            </li>
            <li role="presentation">
               <a href="#totales" aria-controls="totales" role="tab" data-toggle="tab">
                  Total
               </a>
            </li>
  			</ul>
  			<!--Fín Nav tabs -->
  			<div class="tab-content">
  				<!--Inicio de las tabs -->
        		<div role="tabpanel" class="tab-pane active pestania" id="general">
            	<div class="container-fluid">
                  <div class="col-md-7">
                     <h5>
                        Datos Generales del Cliente
                     </h5>
                     <div class="row">
                        <div class="col-md-8">
                           {!! Form::label('Cliente:')!!}<br>
                           <select id="id_cliente" class="form-control">
                              @foreach($clientes as $cliente)
                                 <option value="{{ $cliente->id }}">{{ $cliente->nombre }}  {{ $cliente->apellido }}</option>
                               @endforeach
                           </select>
                           <label>Solicitante</label>
                           {!! Form::text('Solicitante:',null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del solicitante...'])!!}
                           <div class="row">
                              <div class="col-md-6">
                                 <label for="">Telefono:</label> <br>
                                 <div class="input-group">
                                    <span class="input-group-addon" id="telphone">+505 </span>
                                    <input type="text" class="form-control" placeholder="Teléfono...">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 {!! Field::text('fax:',['placeholder'=>'Fax...'])!!}
                              </div>
                           </div>
                        </div>
                        <!--separacion de columnas -->
                        <div class="col-md-4">
                           <br>
                           <button type="button" class="btn btn-info btn-cian-big btn-responsive" href="#" data-toggle='modal' data-target='#myModalCreate' style="margin-top: 9px; margin-bottom:2px;">
                              Agregar +
                           </button><br>
                           <label for="date">Fecha</label>
                           {!! Form::date('',null,['id'=>'fechaE','class'=>'form-control'])!!}
                           <label for="date">Fecha Entrega</label>
                           {!! Form::date('',null,['id'=>'fechaE','class'=>'form-control'])!!}
                        </div>
                     </div>
                  </div>
                  <!-- Separación en columnas --> 
                  <div class="col-md-5" style="border-left: 1px solid #D9D7D7;">
                     <h5>
                        Datos Generales del Proyecto
                     </h5>
                     <div class="row">
                        <div class="col-md-8">
                           {!! Form::label('Producto:')!!} <br>
                           {!! Form::select('id_producto',$producto,null,['id'=>'id_producto','class'=>'form-control'])!!}<br>
                           {!! Form::label('Formato:')!!} <br>
                           {!! Form::select('id_formats',$formato,null,['id'=>'id_formats','class'=>'form-control'])!!}
                           {!! Field::checkbox('Formato Personalizado:','1')!!}
                           {!! Field::text(null,['placeholder'=>'Ingrese el formato personalizado','id' => 'formatopers'])!!}
                        </div>
                        <div class="col-md-4">
                           {!! Field::text('volumen:', ['id' => 'vol_total','placeholder'=>'Volumen', 'disabled'])!!}
                           {!! Form::label('caras:')!!} <br>
                           <select name="" id="caras" class="form-control" style="margin-top: 3px;">
                              <option value="1">1 Cara</option>
                              <option value="2">2 Caras</option>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <!-- Boton de navegación --> 
                        <button type="button" class="btn btn-info btn-cian navbar-right btn-siguiente " href="#especificos" aria-controls="especificos" role="tab" data-toggle="tab" >
                           Siguiente <span class="glyphicon glyphicon-triangle-right"></span>
                        </button>
                     </div>
                     <!-- Fín de Boton de navegación --> 
                  </div>
                  <!-- Fín columnas --> 
            	</div>
          	</div>
            <!--Fín de la primer pestaña -->

            <div role="tabpanel" class="tab-pane pestania" id="especificos">
               <div class="container-fluid">
                  <div class="col-md-6">
                     <h5>
                        Material de la Portada
                     </h5>
                     <div class="row">
                        <div class="col-md-4">
                           {!! Form::label('Nº Páginas:')!!}
                           {!! Form::text('Nº Páginas:', null,['id'=>'papelPort','placeholder'=>'Nº de Páginas','class'=>'form-control']) !!}
                        </div>
                        <div class="col-md-4">
                           {!! Form::label('Material:')!!} 
                           <select id="id_rubroport" class="form-control">
                              @foreach($rubros as $rubro)
                                 <option value="{{ $rubro->id }}">{{ $rubro->descripcion }}</option>
                              @endforeach
                           </select> 
                        </div>
                        <div class="col-md-4">
                           {!! Form::label('Color:')!!}
                           <select id="selectPort" class="form-control">
                              @foreach($colores as $color)
                                 <option value="{{ $color->id }}">{{ $color->color }}</option>
                              @endforeach
                           </select>
                        </div> 
                     </div>
                     {{-- separación --}}
                     <hr>
                     <div class="row">
                        <div class="col-md-6">
                           <h5>
                              Materiales del cuerpo
                           </h5>           
                        </div>
                        <div class="col-md-3">
                           <span id="btn-add" class="btn btn-info btn-cian">
                              Agregar +
                           </span>
                           
                        </div>
                        <div class="col-md-3">
                           <span class="btn btn-info btn-cian" id="mostrar1">Calcular</span>
                        </div>
                     </div><br>

                     <div class="row mat-cuerpo">
                        <ul id="materiales" class="col-md-12 mat">
                           <li class="material material1">
                              <div class="col-md-3">
                                 {!! Form::label('Nº Páginas:')!!}
                                 {!! Form::text('Nº Páginas:', null,['id'=>'cantPapel1','placeholder'=>'Nº de Páginas','class'=>'form-control este-material'])!!}
                              </div>
                              <div class="col-md-3">
                                 {!! Form::label('Material 1:')!!}
                                 <select id="id_rubro1" class="form-control">
                                    @foreach($rubros as $rubro)
                                       <option value="{{ $rubro->id }}">{{ $rubro->descripcion }}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </li>
                        </ul> 
                     </div>
                     <!-- Fín de materiales -->
                  </div>
                  <!-- separación de las dos columnas -->
                  <div class="col-md-6" style="border-left: 1px solid #D9D7D7;">
                     <div class="row cab-titulos" >
                        <div class="col-md-6">
                           <h5>
                              Colores de las páginas del cuerpo
                           </h5>           
                        </div>
                        <div class="col-md-3">
                           <span id="btn-add1" class="btn btn-info btn-cian">
                              Agregar +
                           </span>  
                        </div>
                        <div class="col-md-3">
                           <span class="btn btn-info btn-cian" id="mostrarcolor">Calcular</span>
                        </div>
                     </div>
                     
                     <div class="row mat-cuerpo">
                        <ul id="colores" class="col-md-12 mat">
                           <li class="color">
                              <div class="col-md-3">
                                 {!! Form::label('Nº Páginas:')!!}
                                 {!! Form::text('Nº Páginas:', null,['id'=>'cant1','placeholder'=>'Nº de Páginas','class'=>'form-control este-color'])!!}
                              </div>
                              <div class="col-md-3">
                                 {!! Form::label('Color:')!!}
                                 <select id="color1" class="form-control select-color">
                                    @foreach($colores as $color)
                                       <option value="{{ $color->id }}">{{ $color->color }}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </li>
                        </ul> 
                     </div>
                     <!-- Fín de colores-->
                  
                     <!-- Botones de navegación -->
                     <div class="row">
                        <button type="button" class="btn btn-info btn-cian navbar-right btn-siguiente" href="#adicionales" aria-controls="adicionales" role="tab" data-toggle="tab">
                           Siguiente <span class="glyphicon glyphicon-triangle-right"></span>
                        </button>
                        <button type="button" class="btn btn-info btn-cian navbar-right btn-atras" href="#general" aria-controls="general" role="tab" data-toggle="tab">
                           <span class="glyphicon glyphicon-triangle-left"></span>Atrás
                        </button>
                     </div>
                     <!-- Fín de Botones de navegación -->   
                  </div>
                  <!--Fín de la segunda columna-->
               </div>  
            </div>
            <!--Fín de la segunda pestaña -->

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
                     <div class="row">
                        <button type="button" class="btn btn-info btn-cian navbar-right btn-siguiente" href="#calculos" aria-controls="calculos" role="tab" data-toggle="tab">
                           Calcular <span class="glyphicon glyphicon-triangle-right"></span>
                        </button>
                        <button type="button" class="btn btn-info btn-cian navbar-right btn-atras" href="#especificos" aria-controls="especificos" role="tab" data-toggle="tab">
                           <span class="glyphicon glyphicon-triangle-left"></span>Atrás
                        </button>
                     </div>
                     <!-- Fín de Botones de navegación -->
                  </div>
               </div>  
            </div>
            <!--Fín de la tercer pestaña -->

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
                     </div> 
                     <!-- Separación-->
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
                     </div>
                     <!-- Separación-->
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
                     </div>
                     <!-- Separación-->
                  </div>
                  <!-- Separación de columnas-->
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
                           {!! Form::text('', null,['id' => 'vol0', 'class'=>'form-control'])!!} 
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
                           {!! Field::text('Volumen:',['id'=>'laminas']) !!}
                        </div>
                        @foreach($lamina as $laminas )
                        <div class="col-md-3">
                           {!! Form::label('Costo Unitario:')!!} 
                           {!! Form::text('', $laminas->costo,['id' => 'costUnitLam', 'class'=>'form-control'])!!}
                        </div>
                        @endforeach
                        <div class="col-md-3">
                           {!! Field::text('Costo Total:',['id'=>'totLaminas']) !!}
                        </div>
                        <div class="col-md-3">
                           {!! Field::text('Tintas offset:') !!}
                        </div>
                     </div>
                     <!-- Boton de navegación -->
                     <div class="row">
                        <button type="button" class="btn btn-info btn-cian navbar-right btn-siguiente" href="#manodeobra" aria-controls="manodeobra" role="tab" data-toggle="tab">
                           Siguiente <span class="glyphicon glyphicon-triangle-right"></span>
                        </button>
                        <button type="button" class="btn btn-info btn-cian navbar-right btn-atras" href="#adicionales" aria-controls="adicionales" role="tab" data-toggle="tab">
                           <span class="glyphicon glyphicon-triangle-left"></span>Atrás
                        </button>
                     </div>
                     <!-- Fín de los botones -->
                  </div>
               </div>  
            </div>
            <!--Fín de la cuarta pestaña -->

            <div role="tabpanel" class="tab-pane pestania" id="manodeobra">
               <div class="container-fluid">
                  <center><h5><b>Mano de Obra</b></h5></center>
                  <div class="col-md-6">
                     <div class="row">
                        <h5>
                           M.O. Fotomecánica:
                        </h5>
                        <div class="col-md-4">
                           {!! Field::text('Volumen:', ['id' => 'volMOfot']) !!}
                        </div>
                        <div class="col-md-4">
                           {!! Form::label('Costo Unitario:')!!} 
                           {!! Form::text('', $MOFot[0]->costo, ['id' => 'cosMOfot', 'class'=>'form-control'])!!}
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
                           {!! Form::label('Costo Unitario:')!!} 
                           {!! Form::text('costounit',$MOImpOff[0]->costo,['id' => 'cosImOf', 'class'=>'form-control'])!!}
                        </div>
                        <div class="col-md-4">
                           {!! Field::text('Costo Total:', ['id' => 'costotalImOf']) !!}
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

                  <div class="col-md-6">
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
                           {!! Field::text('otros') !!}
                        </div>             
                     </div>
                     <!-- Boton de navegación -->
                     <div class="row">
                        <button type="button" class="btn btn-info btn-cian navbar-right btn-siguiente" href="#totales" aria-controls="totales" role="tab" data-toggle="tab">
                           siguiente <span class="glyphicon glyphicon-triangle-right"></span>
                        </button>
                        <button type="button" class="btn btn-info btn-cian navbar-right btn-atras" href="#calculos" aria-controls="calculos" role="tab" data-toggle="tab">
                           <span class="glyphicon glyphicon-triangle-left"></span>Atrás
                        </button>
                     </div>
                     <!-- Fín de los botones -->
                  </div>
               </div>  
            </div>
            <!--Fín de la quinta pestaña -->

            <div role="tabpanel" class="tab-pane pestania" id="totales">
               <div class="container-fluid">
                  <center><h3><b>Totales</b></h3></center>
                  <div class="col-md-6">
                     <div class="col-md-6">
                        {!! Field::text('subtotal')!!}
                     </div>
                     <div class="col-md-6">
                        {!! Field::text('gastos')!!}
                     </div>
                     <div class="col-md-6">
                        {!! Field::text('descuento en C$')!!}
                        <div class="checkbox">
                           <label for="">       
                              <input type="checkbox" class="checkbox">IVA
                           </label> 
                        </div>
                        {!! Form::text('',null,['id' => 'iva','disabled', 'class' => 'form-control'])!!} 
                        <label for="">Valor Total de Venta:</label>
                        {!! Form::text('',null,['class' => 'form-control'])!!}
                         <label for="">Precio Unitario:</label>
                        {!! Form::text('', null,['class' => 'form-control'])!!}
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="col-md-6">
                        {!! Field::text('costo Total',['id'=>'costoTotal'])!!}
                     </div>
                     <div class="col-md-6">
                        {!! Field::text('Utilidad Bruta',['id'=>'utilBruta'])!!}
                     </div>  
  
                  
                     <!-- Boton de navegación -->
                     <div class="row">
                        <button type="button" class="btn btn-info btn-cian navbar-right btn-atras" href="#" aria-controls="" role="tab" data-toggle="tab">
                           <span class="glyphicon glyphicon-triangle-left"></span>Atrás
                        </button>
                     </div>
                  </div>
                  <!-- Fín de los botones -->
               </div>
            </div>
            <!--Fín de la sexta pestaña -->  
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
      //agregar cajas para colores
      $btnAdd1 = $('#btn-add1');
      $btnAdd1.click(function(){
         var tamaño = $('li.color').length;
         var claseNuEl = tamaño + 1;

         if(tamaño == 6){
            console.log('no puedes insertar más');
         } else {
            if(tamaño==2){
               $("#colores").append("<div class='row'></div> <hr>");
            }
            if(tamaño==4){
               $("#colores").append("<div class='row'></div> <hr>");
            }
            $("#colores").append("<li class='color color" + claseNuEl + "'><div class='col-md-3'><label>Nº Páginas</label> <input type='text' class='form-control este-color' id='cant" + claseNuEl +"' placeholder='Nº de Páginas'></div> <div class='col-md-3'><label>Color " + claseNuEl + "</label> <select id='color" + claseNuEl +"' class='form-control select-color' onChange='color" + claseNuEl + "'> <?php foreach ($colores as $color) {echo"<option value='$color->id'>$color->color</option>";}?></select></div> </li>");
            } 
      });

      $btnAdd = $('#btn-add');
      $btnAdd.click(function(){
         var tamaño = $('li.material').length;
         var claseNuEl = tamaño + 1;

      if(tamaño == 3){
         console.log('no puedes insertar más');
      } else {
         if(tamaño==2){
            $("#materiales").append("<div class='row'></div><hr>");
         }
         $("#materiales").append("<li class='material material" + claseNuEl + "'><div class='col-md-3'><label>Nº Páginas</label> <input type='text' class='form-control este-material' id='' placeholder='Nº de Páginas'></div> <div class='col-md-3'><label>Material " + claseNuEl + "</label> <select id='id_rubro" + claseNuEl +"' class='form-control' onChange='rubro" + claseNuEl + "Cambio()" + "'> <?php foreach ($rubros as $rubro) {echo"<option value='$rubro->id'>$rubro->descripcion </option>";}?></select></div> </li>");
         } 
      });

      /*     
      var volumen1 = $('#vol1');
      var cosun1 = $('#cotunit1');
      var cost1 = $('#costotal1');

      valCostUnit1 = cosun1.val();
      volumen1.on('blur', function(){
         valVol1 = $(this).val();
         valCostUnit1 = cosun1.val();
         cost1.val(valVol1*valCostUnit1);  
      });*/
   </script>

@endsection