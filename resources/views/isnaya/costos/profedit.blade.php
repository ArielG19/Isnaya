@extends('isnaya/template/main')

@section('title')
	Editar
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
                    <!--=============================Inicio de las tabs========================= -->
                    <div role="tabpanel" class="tab-pane active pestania" id="general">
            	        <div class="container-fluid">
                            <div class="col-md-7">
                                <h5>
                                    Datos Generales del Cliente
                                </h5>
                                <div class="row"> 
                                    <form class="form-horizontal" action="/calculos/{{$proformas->id}}/update" method="'PUT"  enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <!-- Formulario con los datos generales de la proforma-->  
                                    <div class="col-md-8">
                                        {!! Form::label('Cliente:')!!}<br>
                                        <select name="id_cliente" id="id_cliente" class="form-control">
                                            @if ($clientes->count())
                                                @foreach($clientes as $cliente)
                                                    <option value="{{ $cliente->id }}" {{$proformas->cliente->id == $cliente->id ? 'selected="selected"' : '' }}>{{ $cliente->nombre }} {{ $cliente->apellido }}</option>    
                                                @endforeach
                                            @endif
                                        </select>  
                                        <label>Solicitante:</label>
                                        <input type="text" name="solicitante" class="form-control" value="{{$proformas->solicitante}}">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="">Telefono:</label> <br>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="telphone">+505 </span>
                                                    <input type="text" class="form-control" name="telefono" value="{{$proformas->telefono}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">Fax:</label>
                                                <input type="text" class="form-control" name="fax" value="{{$proformas->fax}}">
                                            </div> 
                                        </div>
                                    </div>
                                    <!--separacion de columnas -->
                                    <div class="col-md-4">
                                        <br>
                                        <button type="button" class="btn btn-info btn-cian-big btn-responsive" href="#" data-toggle='modal' data-target='#myModalCreate' style="margin-top: 9px; margin-bottom:2px;">
                                            Agregar +
                                        </button>
                                        <label for="date">Fecha</label>
                                        <input type="date" id="fechaE" value="{{$proformas->fecha}}" class="form-control">
                                        <label for="date">Fecha Entrega</label>
                                        <input type="date" value="{{$proformas->fechaFin}}" class="form-control" id="fechaE">
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
                                        <select name="id_prod" id="producto" class="form-control">
                                            @if ($productos->count())
                                                @foreach($productos as $prod)
                                                    <option value="{{ $prod->id }}" {{$proformas->producto->id == $prod->id ? 'selected="selected"' : '' }}>{{ $prod->descripcion }} </option>    
                                                @endforeach
                                            @endif
                                        </select>
                                        {!! Form::label('Formato')!!} <br>
                                        <select name="" id="id_formats" class="form-control">
                                            @if ($formato->count())
                                                @foreach($formato as $format)
                                                    <option value="{{ $format->id }}" {{$proformas->formato->id == $format->id ? 'selected="selected"' : '' }}>{{ $format->formato }} </option>    
                                                @endforeach
                                            @endif
                                        </select> 
                                        {!! Field::checkbox('Formato Personalizado:','1',['class'=>'fpercheck'])!!}
                                        {!! Field::text(null,['placeholder'=>'Ingrese el formato personalizado','id' => 'formatopers','class'=>'fpertxt','disabled'])!!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::label('Volumen:')!!} 
                                        {!! Form::text('num_pag',$proformas->num_pag, ['class' => 'form-control','id' => 'vol_total'])!!}
                                        <label for="" id="ncara">Caras:</label> 
                                        <select name="caras" id="caras" class="form-control" style="margin-top: 3px;">
                                            <option value="1">1 Cara</option>
                                            <option value="2">2 Caras</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-md-offset-9">
                                    <!-- Boton de navegación --> 
                                    <button type="button" class="btn btn-info btn-cian navbar-right btn-siguiente " href="#especificos" aria-controls="especificos" role="tab" data-toggle="tab" >
                                        Siguiente <span class="glyphicon glyphicon-triangle-right"></span>
                                    </button>
                                </div>
                                <!-- Fín de Boton de navegación --> 
                            </div><!-- Fín columnas --> 
                        </div>
            	    </div>
                    <!-- =========Fín de la primer pestaña ======================== -->   
                    <div role="tabpanel" class="tab-pane pestania" id="especificos">
                        <div class="container-fluid">
                            <div class="col-md-6">
                                <h5>
                                    Material de la Portada
                                </h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        {!! Form::label('Nº Páginas:')!!}
                                        {!! Form::text('numero1',$rub0[0]->cantRubro,['id'=>'papelPort','placeholder'=>'Nº de Páginas','class'=>'form-control este-material']) !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::label('Material:')!!} 
                                        <select id="id_rubroport" class="form-control">
                                            @if ($rubros->count())
                                                @foreach($rubros as $rubro)
                                                    <option value="{{ $rubro->id }}" {{$rub0[0]->id == $rubro->id ? 'selected="selected"' : '' }}>{{ $rubro->descripcion }} </option>    
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::label('Color:')!!}
                                        <select id="selectPort" class="form-control">
                                            @if ($colores->count())
                                                @foreach($colores as $color)
                                                    <option value="{{ $color->id }}" {{$col0[0]->id == $color->id ? 'selected="selected"' : '' }}>{{ $color->color }} </option>    
                                                @endforeach
                                            @endif
                                        </select>
                                    </div> 
                                </div>
                                {{-- ===============separación================= --}}
                                <hr>
                                <div class="row">
                                    <div class="col-md-9">
                                        <h5>
                                            Materiales del cuerpo
                                        </h5>           
                                    </div>
                                    {{--<div class="col-md-3">
                                        <span id="btn-add" class="btn btn-info btn-cian">
                                            Agregar +
                                        </span>
                                    </div> --}}
                                </div><br>
                                <div class="row mat-cuerpo">
                                    <ul id="materiales" class="col-md-12 mat">
                                        <li class="material material1">
                                            @if( empty ($rub1[0]) )  
                                                <div class="col-md-3">
                                                    {!! Form::label('Nº Páginas:')!!}
                                                    {!! Form::text('',null,['id'=>'cantpapel1','placeholder'=>'Nº de Páginas','class'=>'form-control este-material'])!!}
                                                </div>
                                                <div class="col-md-3">
                                                    {!! Form::label('Material 1:')!!}
                                                    <select id="id_rubro1" class="form-control">
                                                        @foreach($rubros as $rubro)
                                                            <option value="{{ $rubro->id }}">{{ $rubro->descripion }} </option>    
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @else
                                                <div class="col-md-3">
                                                    {!! Form::label('Nº Páginas:')!!}
                                                    {!! Form::text('',$rub1[0]->cantRubro,['id'=>'cantpapel1','placeholder'=>'Nº de Páginas','class'=>'form-control este-material'])!!}
                                                </div>
                                                <div class="col-md-3">
                                                    {!! Form::label('Material 1:')!!}
                                                    <select id="id_rubro1" class="form-control">
                                                        @if ($rubros->count())
                                                            @foreach($rubros as $rubro)
                                                                <option value="{{ $rubro->id }}" {{$rub1[0]->id == $color->id ? 'selected="selected"' : '' }}>{{ $rubro->descripcion }} </option>    
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            @endif    
                                        </li>
                                        <li class="material material2">   
                                            @if( empty ($rub2[0]) )  
                                                <div class="col-md-3">
                                                    {!! Form::label('Nº Páginas:')!!}
                                                    {!! Form::text('',null,['id'=>'papel2','placeholder'=>'Nº de Páginas','class'=>'form-control este-material','onBlur'=>'papel2Cambio()'])!!}
                                                </div>
                                                <div class="col-md-3">
                                                    {!! Form::label('Material 2:')!!}
                                                    <select id="id_rubro2" class="form-control" onChange="rubro2Cambio()">
                                                        @foreach($rubros as $rubro)
                                                            <option value="{{ $rubro->id }}">{{ $rubro->descripion }} </option>    
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @else
                                                <div class="col-md-3">
                                                    {!! Form::label('Nº Páginas:')!!}
                                                    {!! Form::text('',$rub2[0]->cantRubro,['id'=>'papel2','placeholder'=>'Nº de Páginas','class'=>'form-control este-material','onBlur'=>'papel2Cambio()'])!!}
                                                </div>
                                                <div class="col-md-3">
                                                    {!! Form::label('Material 2:')!!}
                                                    <select id="id_rubro2" class="form-control" onChange="rubro2Cambio()">
                                                        @if ($rubros->count())
                                                            @foreach($rubros as $rubro)
                                                                <option value="{{ $rubro->id }}" {{$rub2[0]->id == $color->id ? 'selected="selected"' : '' }}>{{ $rubro->descripcion }} </option>    
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            @endif 
                                        </li>
                                        <div class="row"></div>
                                        <hr>
                                        <li class="material material3">                                         
                                            @if( empty ($rub3[0]) )  
                                                <div class="col-md-3">
                                                    {!! Form::label('Nº Páginas:')!!}
                                                    {!! Form::text('',null,['id'=>'papel3','placeholder'=>'Nº de Páginas','class'=>'form-control este-material','onBlur'=>'papel3Cambio()'])!!}
                                                </div>
                                                <div class="col-md-3">
                                                    {!! Form::label('Material 3:')!!}
                                                    <select id="id_rubro3" class="form-control" onChange="rubro3Cambio()">
                                                        @foreach($rubros as $rubro)
                                                            <option value="{{ $rubro->id }}">{{ $rubro->descripion }} </option>    
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @else
                                                <div class="col-md-3">
                                                    {!! Form::label('Nº Páginas:')!!}
                                                    {!! Form::text('',$rub3[0]->cantRubro,['id'=>'papel3','placeholder'=>'Nº de Páginas','class'=>'form-control este-material', 'onBlur'=>'papel3Cambio()'])!!} 
                                                </div>
                                                <div class="col-md-3">
                                                    {!! Form::label('Material 3:')!!}
                                                    <select id="id_rubro3" class="form-control" onChange="rubro3Cambio()">
                                                        @if ($rubros->count())
                                                            @foreach($rubros as $rubro)
                                                                <option value="{{ $rubro->id }}" {{$rub3[0]->id == $color->id ? 'selected="selected"' : '' }}>{{ $rubro->descripcion }} </option>    
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            @endif 
                                        </li>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3">
                                            <span class="btn btn-info btn-cian btn-cal" id="editcalc">Calcular</span> 
                                        </div>
                                    </ul> 
                                </div>
                            </div>
                            <!-- Fín de materiales -->
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxseparación de las dos columnasxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="col-md-6" style="border-left: 1px solid #D9D7D7;">
                                <div class="row cab-titulos" >
                                    <div class="col-md-9">
                                        <h5>
                                            Colores de las páginas del cuerpo
                                        </h5>           
                                    </div>
                                    {{-- <div class="col-md-3">
                                        <span id="btn-add1" class="btn btn-info btn-cian">
                                            Agregar +
                                        </span>  
                                    </div> --}}
                                    <div class="col-md-3">
                                        <span class="btn btn-info btn-cian" id="recalcolor">
                                            Calcular
                                        </span>
                                    </div>
                                </div>
                                <div class="row mat-cuerpo">
                                    <ul id="colores" class="col-md-12 mat">
                                        <li class="color">
                                            {!! Form::hidden('color2', '', array ('id' => 'col2') )!!}
                                            {!! Form::hidden('color1', '', array ('id' => 'col1') )!!}
                                            {!! Form::hidden('color3', '', array ('id' => 'col3') )!!}
                                            {!! Form::hidden('color4', '', array ('id' => 'col4') )!!}
                                            {!! Form::hidden('color5', '', array ('id' => 'col5') )!!}
                                            {!! Form::hidden('color6', '', array ('id' => 'col6') )!!}

                                            {!! Form::hidden('idcolor1', '', array ('id' => 'idcol1') )!!}
                                            {!! Form::hidden('idcolor2', '', array ('id' => 'idcol2') )!!}
                                            {!! Form::hidden('idcolor3', '', array ('id' => 'idcol3') )!!}
                                            {!! Form::hidden('idcolor4', '', array ('id' => 'idcol4') )!!}
                                            {!! Form::hidden('idcolor5', '', array ('id' => 'idcol5') )!!}
                                            {!! Form::hidden('idcolor6', '', array ('id' => 'idcol6') )!!}

                                            {!! Form::hidden('num1', '', array ('id' => 'numcolor1') )!!}
                                            {!! Form::hidden('num2', '', array ('id' => 'numcolor2') )!!}
                                            {!! Form::hidden('num3', '', array ('id' => 'numcolor3') )!!}
                                            {!! Form::hidden('num4', '', array ('id' => 'numcolor4') )!!}
                                            {!! Form::hidden('num5', '', array ('id' => 'numcolor5') )!!}
                                            {!! Form::hidden('num6', '', array ('id' => 'numcolor6') )!!}
                                            @if( empty ($col1[0]) )  
                                                <div class="col-md-3">
                                                    {!! Form::label('Nº Páginas:')!!}
                                                    {!! Form::text('',0,['id'=>'cant1','placeholder'=>'Nº de Páginas','class'=>'form-control este-color'])!!}
                                                </div>
                                                <div class="col-md-3">
                                                    {!! Form::label('Color:')!!}
                                                    <select id="color1" class="form-control select-color">
                                                        @foreach($colores as $color)
                                                            <option value="{{ $color->id }}">{{ $color->color }} </option>    
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @else
                                                    <div class="col-md-3">
                                                        {!! Form::label('Nº Páginas:')!!}
                                                        {!! Form::text('',$col1[0]->cantidad,['id'=>'cant1','placeholder'=>'Nº de Páginas','class'=>'form-control este-color'])!!}
                                                    </div>
                                                    <div class="col-md-3">
                                                        {!! Form::label('Color:')!!}
                                                        <select id="color1" class="form-control select-color">
                                                            @if ($colores->count())
                                                                @foreach($colores as $color)
                                                                    <option value="{{ $color->id }}" {{$col1[0]->id == $color->id ? 'selected="selected"' : '' }}>{{ $color->color }} </option>    
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                            @endif
                                            @if( empty ($col2[0]) )  
                                                <div class="col-md-3">
                                                    {!! Form::label('Nº Páginas:')!!}
                                                    {!! Form::text('',0,['id'=>'cant2','placeholder'=>'Nº de Páginas','class'=>'form-control este-color'])!!}
                                                </div>
                                                <div class="col-md-3">
                                                    {!! Form::label('Color:')!!}
                                                    <select id="color1" class="form-control select-color">
                                                        @foreach($colores as $color)
                                                            <option value="{{ $color->id }}">{{ $color->color }} </option>    
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @else
                                                    <div class="col-md-3">
                                                        {!! Form::label('Nº Páginas:')!!}
                                                        {!! Form::text('',$col2[0]->cantidad,['id'=>'cant2','placeholder'=>'Nº de Páginas','class'=>'form-control este-color'])!!}
                                                    </div>
                                                    <div class="col-md-3">
                                                        {!! Form::label('Color:')!!}
                                                        <select id="color1" class="form-control select-color">
                                                            @if ($colores->count())
                                                                @foreach($colores as $color)
                                                                    <option value="{{ $color->id }}" {{$col2[0]->id == $color->id ? 'selected="selected"' : '' }}>{{ $color->color }} </option>    
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                            @endif
                                            @if( empty ($col3[0]) )  
                                                <div class="col-md-3">
                                                    {!! Form::label('Nº Páginas:')!!}
                                                    {!! Form::text('',0,['id'=>'cant3','placeholder'=>'Nº de Páginas','class'=>'form-control este-color'])!!}
                                                </div>
                                                <div class="col-md-3">
                                                    {!! Form::label('Color:')!!}
                                                    <select id="color1" class="form-control select-color">
                                                        @foreach($colores as $color)
                                                            <option value="{{ $color->id }}">{{ $color->color }} </option>    
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @else
                                                    <div class="col-md-3">
                                                        {!! Form::label('Nº Páginas:')!!}
                                                        {!! Form::text('',$col3[0]->cantidad,['id'=>'cant3','placeholder'=>'Nº de Páginas','class'=>'form-control este-color'])!!}
                                                    </div>
                                                    <div class="col-md-3">
                                                        {!! Form::label('Color:')!!}
                                                        <select id="color1" class="form-control select-color">
                                                            @if ($colores->count())
                                                                @foreach($colores as $color)
                                                                    <option value="{{ $color->id }}" {{$col3[0]->id == $color->id ? 'selected="selected"' : '' }}>{{ $color->color }} </option>    
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                            @endif
                                            @if( empty ($col4[0]) )  
                                                <div class="col-md-3">
                                                    {!! Form::label('Nº Páginas:')!!}
                                                    {!! Form::text('',0,['id'=>'cant4','placeholder'=>'Nº de Páginas','class'=>'form-control este-color'])!!}
                                                </div>
                                                <div class="col-md-3">
                                                    {!! Form::label('Color:')!!}
                                                    <select id="color1" class="form-control select-color">
                                                        @foreach($colores as $color)
                                                            <option value="{{ $color->id }}">{{ $color->color }} </option>    
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @else
                                                    <div class="col-md-3">
                                                        {!! Form::label('Nº Páginas:')!!}
                                                        {!! Form::text('',$col4[0]->cantidad,['id'=>'cant4','placeholder'=>'Nº de Páginas','class'=>'form-control este-color'])!!}
                                                    </div>
                                                    <div class="col-md-3">
                                                        {!! Form::label('Color:')!!}
                                                        <select id="color1" class="form-control select-color">
                                                            @if ($colores->count())
                                                                @foreach($colores as $color)
                                                                    <option value="{{ $color->id }}" {{$col4[0]->id == $color->id ? 'selected="selected"' : '' }}>{{ $color->color }} </option>    
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                            @endif
                                            @if( empty ($col5[0]) )  
                                                <div class="col-md-3">
                                                    {!! Form::label('Nº Páginas:')!!}
                                                    {!! Form::text('',0,['id'=>'cant5','placeholder'=>'Nº de Páginas','class'=>'form-control este-color'])!!}
                                                </div>
                                                <div class="col-md-3">
                                                    {!! Form::label('Color:')!!}
                                                    <select id="color1" class="form-control select-color">
                                                        @foreach($colores as $color)
                                                            <option value="{{ $color->id }}">{{ $color->color }} </option>    
                                                        @endforeach
                                                    </select>
                                                </div>
                                                 @else
                                                    <div class="col-md-3">
                                                        {!! Form::label('Nº Páginas:')!!}
                                                        {!! Form::text('',$col5[0]->cantidad,['id'=>'cant5','placeholder'=>'Nº de Páginas','class'=>'form-control este-color'])!!}
                                                    </div>
                                                    <div class="col-md-3">
                                                        {!! Form::label('Color:')!!}
                                                        <select id="color1" class="form-control select-color">
                                                            @if ($colores->count())
                                                                @foreach($colores as $color)
                                                                    <option value="{{ $color->id }}" {{$col5[0]->id == $color->id ? 'selected="selected"' : '' }}>{{ $color->color }} </option>    
                                                                @endforeach
                                                                @endif
                                                        </select>
                                                    </div>
                                            @endif
                                            @if( empty ($col6[0]) )     
                                                <div class="col-md-3">
                                                    {!! Form::label('Nº Páginas:')!!}
                                                    {!! Form::text('',0,['id'=>'cant6','placeholder'=>'Nº de Páginas','class'=>'form-control este-color'])!!}
                                                </div>
                                                <div class="col-md-3">
                                                    {!! Form::label('Color:')!!}
                                                    <select id="color1" class="form-control select-color">
                                                        @foreach($colores as $color)
                                                            <option value="{{ $color->id }}">{{ $color->color }} </option>    
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @else
                                                <div class="col-md-3">
                                                    {!! Form::label('Nº Páginas:')!!}
                                                    {!! Form::text('',$col6[0]->cantidad,['id'=>'cant6','placeholder'=>'Nº de Páginas','class'=>'form-control este-color'])!!}
                                                </div>
                                                <div class="col-md-3">
                                                    {!! Form::label('Color:')!!}
                                                    <select id="color1" class="form-control select-color">
                                                        @if ($colores->count())
                                                            @foreach($colores as $color)
                                                                <option value="{{ $color->id }}" {{$col6[0]->id == $color->id ? 'selected="selected"' : '' }}>{{ $color->color }} </option>    
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            @endif
                                        </li>
                                    </ul> 
                                </div>
                                <!-- xxxxxxxxxxxxxx Fín de coloresxxxxxxxxxxxxxxxxxxxxxx-->
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
                        </div> <!-- xxxxxxxxxxxxxxFín de la segunda columnaxxxxxxxxxxxxxxxxxxxxx--> 
                    </div>
                    <!--===================Fín de la segunda pestaña================================== -->
                    <!--===================Inicio de la tercer pestaña================================== -->
                    <div role="tabpanel" class="tab-pane pestania" id="adicionales">
                        <div class="container-fluid">
                            <div class="col-md-6">
                                <h5>
                                    Encuadernación
                                </h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Grapado</label>
                                        {!! Form::checkbox('',null,['class' => 'form-control'])!!}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Granel</label>        
                                        {!! Form::checkbox('',null,['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-md-4"> 
                                        <label>Encolado/Encolochado</label> 
                                        {!! Form::checkbox('',null,['class' => 'form-control'])!!}
                                    </div>                
                                    <div class="col-md-4">
                                        <label>Barniz ultavioleta</label>        
                                        {!! Form::checkbox('',null,['class' => 'form-control'])!!}
                                    </div>
                                    <div class="col-md-4"> 
                                        <label>Plasticado</label>       
                                        {!! Form::checkbox('',null,['class' => 'form-control'])!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="border-left: 1px solid #D9D7D7;">
                                <h5>
                                    Arte y Diseño
                                </h5>
                                <div class="row">
                                    <div class="col-md-6"> 
                                        {!! Form::label('Imprenta:')!!}        
                                        {{  Form::radio('','1')}}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::label('Cliente:')!!} 
                                        {{ Form::radio('', '1',true)}}   
                                    </div>
                                    <div class="col-md-12">
                                        {!! Form::label('Otros datos:')!!} 
                                        <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
                                    </div> 
                                </div>
                                <!-- xxxxxxxxxBoton de navegación xxxxxxxxxxxxxxxxxxx-->
                                <div class="row">
                                    <button type="button" class="btn btn-info btn-cian navbar-right btn-siguiente" href="#calculos" aria-controls="calculos" role="tab" data-toggle="tab">
                                        Calcular <span class="glyphicon glyphicon-triangle-right"></span>
                                    </button>
                                    <button type="button" class="btn btn-info btn-cian navbar-right btn-atras" href="#especificos" aria-controls="especificos" role="tab" data-toggle="tab">
                                        <span class="glyphicon glyphicon-triangle-left"></span>Atrás
                                    </button>
                                </div>
                                <!-- xxxxxxxxxxxxxxxxxxxxxFín de Botones de navegación xxxxxxxxxxxxxxxxxxxxx-->
                            </div>
                        </div>  
                    </div>
                    <!--===================Fín de la tercer pestaña============================= -->
                    <div role="tabpanel" class="tab-pane pestania" id="calculos">
                        <div class="container-fluid">
                            <div class="col-md-6">
                                <h5>Costos de papel</h5>
                                <div class="row">
                                    <h5 class="tit-cal">costo de papel Nº 1</h5>
                                    <div class="col-md-3">
                                        {!! Form::label('Material:')!!} 
                                        {!! Form::text('Mat1', null,['id' => 'Mat1', 'class'=>'form-control'])!!}
                                        {!! Form::hidden('idMat1', 'secret', array ('id' => 'idmate1') )!!}
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::label('Volumen:')!!} 
                                        {!! Form::text('vol1', null,['id' => 'vol1', 'class'=>'form-control'])!!} 
                                        {!! Form::hidden('numero2', 'secret', array ('id' => 'numrubro2') )!!}
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::label('Costo Unitario:')!!} 
                                        {!! Form::text('pag_unit1', null,['id' => 'cotunit1', 'class'=>'form-control'])!!} 
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::label('Costo Total:')!!} 
                                        {!! Form::text('costot1', null,['id' => 'costotal1', 'class'=>'form-control'])!!} 
                                        {!! Form::hidden('numero3', 'secret', array ('id' => 'numrubro3') )!!}
                                    </div>
                                </div> 
                                <!-- Separación-->
                                <hr>
                                <div class="row">
                                    <h5 class="tit-cal">costo de papel Nº 2</h5>
                                    <div class="col-md-3">
                                        {!! Form::label('Material:')!!} 
                                        {!! Form::text('Mat2', null,['id' => 'Mat2', 'class'=>'form-control'])!!} 
                                        {!! Form::hidden('idMat2', 'secret', array ('id' => 'idmate2') )!!}
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::label('Volumen:')!!} 
                                        {!! Form::text('vol2', null,['id' => 'vol2', 'class'=>'form-control'])!!} 
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::label('Costo Unitario:')!!} 
                                        {!! Form::text('pag_unit2', null,['id' => 'cotunit2', 'class'=>'form-control'])!!} 
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::label('Costo Total:')!!} 
                                        {!! Form::text('costot2', null,['id' => 'costotal2', 'class'=>'form-control'])!!} 
                                    </div>
                                </div>
                                <!-- Separación-->
                                <hr>
                                <div class="row">
                                    <h5 class="tit-cal">costo de papel Nº 3</h5>
                                    <div class="col-md-3">
                                        {!! Form::label('Material:')!!} 
                                        {!! Form::text('Mat3', null,['id' => 'Mat3', 'class'=>'form-control'])!!} 
                                        {!! Form::hidden('idMat3', 'secret', array ('id' => 'idmate3') )!!}
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::label('Volumen:')!!} 
                                        {!! Form::text('vol3', null,['id' => 'vol3', 'class'=>'form-control'])!!} 
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::label('Costo Unitario:')!!} 
                                        {!! Form::text('pag_unit3', null,['id' => 'cotunit3', 'class'=>'form-control'])!!} 
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::label('Costo Total:')!!} 
                                        {!! Form::text('costot3', null,['id' => 'costotal3', 'class'=>'form-control'])!!}
                                    </div>
                                </div>
                                <!-- Separación--> 
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxSeparación de columnasxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
                            <div class="col-md-6" style="border-left: 1px solid #D9D7D7;">
                                <h5>Costos de Portada</h5>
                                <div class="row">
                                    <h5 class="tit-cal">Portada</h5>
                                    <div class="col-md-3">
                                        {!! Form::label('Material:')!!} 
                                        {!! Form::text('Mat0', null,['id' => 'Matpor', 'class'=>'form-control'])!!} 
                                        {!! Form::hidden('idMat0', 'secret', array ('id' => 'idmate0') )!!}
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::label('Volumen:')!!} 
                                        {!! Form::text('vol0', null,['id' => 'vol0', 'class'=>'form-control'])!!} 
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::label('Costo Unitario:')!!} 
                                        {!! Form::text('pag_unit', null,['id' => 'cotunitport', 'class'=>'form-control'])!!} 
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::label('Costo Total:')!!} 
                                        {!! Form::text('costot0', null,['id' => 'costotalport', 'class'=>'form-control'])!!} 
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
                                        <label for="">Láminas:</label>
                                        {!! Form::text('volumen',null,['id'=>'laminas','class'=>'form-control']) !!}
                                    </div>
                                    @foreach($lamina as $laminas )
                                        <div class="col-md-3">
                                            {!! Form::label('Costo Unitario:')!!} 
                                            {!! Form::text('', $laminas->costo,['id' => 'costUnitLam', 'class'=>'form-control'])!!}
                                        </div>
                                    @endforeach
                                    <div class="col-md-3">
                                        <label for="">Costo Total:</label>
                                        {!! Field::text('',['id'=>'totLaminas']) !!}
                                    </div>
                                    <div class="col-md-3">
                                        {{--!! Field::text('Tintas offset:') !!--}}
                                        <label for="">Tintas offset:</label>
                                        {!! Field::text('',['id' => 'TintasOffset']) !!}
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
                                <!--xxxxxxxxxxxxxx Fín de los botonesxxxxxxxxxxxxxxxxxxxxx -->
                            </div>
                        </div>  
                    </div>
                    <!--===================Fín de la cuarta pestaña=========================== -->
                    <div role="tabpanel" class="tab-pane pestania" id="manodeobra">
                        <div class="container-fluid">
                            <center><h5><b>Mano de Obra</b></h5></center>
                            <div class="col-md-6">
                                <div class="row">
                                    <h5>
                                        M.O. Fotomecánica:
                                    </h5>
                                    <div class="col-md-4">
                                        <label for="">Volumen:</label>
                                        {!! Field::text('', ['id' => 'volMOfot']) !!}
                                    </div>
                                    <div class="col-md-4">
                                    {!! Form::label('Costo Unitario:')!!} 
                                    {!! Form::text('', $MOFot[0]->costo, ['id' => 'cosMOfot', 'class'=>'form-control'])!!}
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Costo Total:</label>
                                        {!! Field::text('', ['id' => 'costotalMOfot']) !!}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <h5>
                                    M.O. Impresion offset:
                                    </h5>
                                    <div class="col-md-4">
                                        <label for="">Volumen:</label>
                                        {!! Field::text('', ['id' => 'volImOf']) !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::label('Costo Unitario:')!!} 
                                        {!! Form::text('',$MOImpOff[0]->costo,['id' => 'cosImOf', 'class'=>'form-control'])!!}
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Costo Total:</label>
                                        {!! Field::text('', ['id' => 'costotalImOf']) !!}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Fotocopia B/N:</label>
                                        {!! Field::text('') !!}
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Corte:</label>
                                        {!! Field::text('') !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::label('Compaginación:')!!} 
                                        {!! Field::text('') !!}
                                    </div>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxseparacion de los rowxxxxxxxxxxxxxxxxxxxxxxxxxxx --> 
                            <div class="col-md-6">
                                <!-- separacion de los row -->   
                                <div class="row">
                                    <h5>
                                        Grapado:
                                    </h5>
                                    <div class="col-md-4">
                                        {!! Form::label('Volumen:')!!} 
                                        {!! Field::text('') !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::label('Costo Unitario:')!!} 
                                        {!! Field::text('') !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::label('Costo Total:')!!} 
                                        {!! Field::text('') !!}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <h5>
                                        Encolado/Encolochado:
                                    </h5>
                                    <div class="col-md-4">
                                        {!! Form::label('Volumen:')!!} 
                                        {!! Field::text('') !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::label('Costo Unitario:')!!} 
                                        {!! Field::text('') !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::label('Costo Total:')!!} 
                                        {!! Field::text('') !!}
                                    </div>
                                </div>
                                <hr><!-- separacion de los row  -->
                                <div class="row">
                                    <h5>
                                        Cocido:
                                    </h5>
                                    <div class="col-md-4">
                                        {!! Form::label('Volumen:')!!} 
                                        {!! Field::text('') !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::label('Costo Unitario:')!!} 
                                        {!! Field::text('') !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::label('Costo Total:')!!} 
                                        {!! Field::text('') !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        {!! Form::label('Numerado:')!!} 
                                        {!! Field::text('') !!}
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::label('Troquelado:')!!} 
                                        {!! Field::text('') !!}
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::label('Plastificado:')!!} 
                                        {!! Field::text('') !!}
                                    </div>    
                                    <div class="col-md-3">
                                        {!! Form::label('Otros:')!!} 
                                        {!! Field::text('') !!}
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
                                <!--xxxxxxxxxxxxxxxxxxxx Fín de los botonesxxxxxxxxxxxxxxxxxxxxxx -->
                            </div>
                        </div>  
                    </div>
                    <!--=======================Fín de la quinta pestaña=========================== -->

                    <div role="tabpanel" class="tab-pane pestania" id="totales">
                        <div class="container-fluid">
                            <center><h3><b>Totales</b></h3></center>
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    {!! Form::label('Subtotal:')!!} 
                                    {!! Form::text('subtotal',null,['id'=>'subtotal', 'class'=>'form-control'])!!}
                                </div>
                                <div class="col-md-6">
                                    {!! Form::label('Gastos:')!!} 
                                    {!! Form::text('gastos',null,['id'=>'gastos','class'=>'form-control'])!!}
                                </div>
                                <div class="col-md-6">
                                    {!! Form::label('Descuento en C$:')!!} 
                                    {!! Form::text('descuento',null, ['id'=>'descuento','class'=>'form-control'])!!}
                                    <input type="checkbox" class="iva"><span> IVA</span>
                                    {!! Form::text('iva',null,['class' => 'form-control ivatxt', 'disabled','id'=>'iva'  ])!!}
                                    <label for="">Valor Total de Venta:</label>
                                    {!! Form::text('valor_venta',null,['id'=>'valor_venta','class' => 'form-control'])!!}
                                    <label for="">Precio Unitario:</label>
                                    {!! Form::text('precio_venta', null,['id'=>'precio_venta','class' => 'form-control'])!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    {!! Form::label('Costo Total:')!!} 
                                    {!! Form::text('costo_total',null,['id'=>'costoTotal','class'=>'form-control'])!!}
                                </div>
                                <div class="col-md-6">
                                    {!! Form::label('Utilidad Bruta:')!!}
                                    {!! Form::text('utilidad_bruta',null,['id'=>'utilBruta','class'=>'form-control'])!!} 
                                </div>  
                                <!--xxxxxxxxx Boton de navegaciónxxxxxxxxxxxxxx -->
                                <div class="row">
                                    <input type="submit" name='enviar' value="Actualizar" class="btn btn-info btn-cian pull-right btn-siguiente">
                                    {{-- <button class="btn btn-info btn-cian pull-right btn-siguiente" type="submit" name='enviar' href="#" id="guardarProforma">
                                        Guardar
                                    </button> --}}
                                    </form>
                                    <button type="button" class="btn btn-info btn-cian pull-right btn-atras" href="#" aria-controls="" role="tab" data-toggle="tab">
                                        <span class="glyphicon glyphicon-triangle-left"></span>Atrás
                                    </button>
                                </div>
                            </div>
                            <!--xxxxxxxxxxxxxxx Fín de los botones xxxxxxxxxxxxxxxxx-->
                        </div>
                    </div>
                    <!--=================Fín de la sexta pestaña =========================--> 
                </div>        
            </div>
        </div>
  	</div>
@endsection

@include('isnaya.costos.modalcreate')
@section('script')
    <script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
@endsection