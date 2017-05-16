@extends('isnaya.template.main')

@section('title')
	Calcular
@endsection

@section('contenido')
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
                    <div class="panel-title">
                        <center>
                        	Realizar Calculos de los costos
                        </center>
                    </div>
                </div>
                <div class="panel-body">
                	<!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Formulario 1</a>
                        </li>
                        <li role="presentation">
                            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Formulario 2</a>
                        </li>
                        <li role="presentation">
                            <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Formulario 3</a>
                        </li>
                        <li role="presentation">
                            <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Guardar datos </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="container-fluid">
                                        {!!Form::open(['id'=>'form'])!!}   
                                        <div class="title">
                                            <h3>
                                                Datos Generales 
                                            </h3>
                                        </div>
                                        <div class="col-md-3">
                                            {!! Field::text('cliente:', ['id' => 'cliente', 'placeholder'=>'Ingrese el cliente'])!!}
                                        </div>
                                        <div class="col-md-3">
                                            {!! Field::text('solicitante:', ['id' => 'solicitante', 'placeholder'=>'Ingrese el solicitante'])!!}
                                        </div>
                                        {!! Field::date('fecha:', ['id' => 'fecha'])!!}            
                                        {!! Field::text('telefono:', ['id' => 'telefono', 'placeholder'=>'Ingrese el teléfono'])!!}
                                        {!! Field::text('fax:', ['id' => 'fax', 'placeholder'=>'Ingrese el fax'])!!}
                                    </div> 
                                </div> 
                                <div class="container-fluid">
                                    {!!Form::open(['id'=>'form'])!!}   
                                    <div class="title">
                                        <h3>
                                            Datos Generales de proforma
                                        </h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        {!! Field::select('producto:')!!}
                                        {!! Field::select('formato:')!!}                                       
                                        {!! Field::checkbox('Formato Personalizado:','1'), Field::text(null,['placeholder'=>'Ingrese el formato personalizado','id' => 'formatopers'])!!}
                                        {!! Field::text('volumen:', ['placeholder'=>'Volumen'])!!} 
                                        {!! Field::select('caras:', ['1' =>'1 Cara','2' => '2 Caras'])!!}
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        {!! Field::select('Material de portada:')!!}
                                        <h4>Material del cuerpo</h4>
                                        {!! Field::select('Material de cuerpo 1:')!!}
                                        {!! Field::select('Material de cuerpo 2:')!!}
                                        {!! Field::select('Material de cuerpo 3:')!!}
                                    </div>
                                </div>                      
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h3>
                                            Datos Generales del Trabajo
                                        </h3>
                                    </div>
                                    {!! Field::select('producto:')!!}
                                    {!! Field::select('formato:')!!}
                                    {!! Field::text('personalizado:', ['placeholder'=>'personalizado'])!!}
                                   
                                </div>
                                <div class="col-md-6">
                                    {!! Field::select('Material de portada:')!!}
                                    {!! Field::select('Material de cuerpo:')!!}
                                    <div class="col-md-3">
                                        {!! Field::text('N°. de paginas del cuerpo:', ['id' => 'npagCuerpo'])!!}
                                        {!! Field::text('N°. de paginas de Portada:', ['id' => 'npagPortada'])!!}
                                    </div>
                                </div>
                            </div>                       
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <div class="row">
                                <div class="col-md-6">


                                </div>
                            </div>                       
                    </div>
                    <div role="tabpanel" class="tab-pane" id="settings">
                            <div class="row">
                                <div class="col-md-6">


                                </div>
                            </div>                       
                    </div>
			    </div>  
		    </div>
	    </div>
	</div>
@endsection