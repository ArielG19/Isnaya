@extends('isnaya.template.main')

@section('title')
	Calcular
@endsection

@section('contenido')
	<div class="row">
		<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
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
                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Datos Generales</a>
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
                            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>
                                            <center>Ingresar los Datos</center>
                                        </h4>
                                    </div>
                                    <div class="panel-body">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Datos Generales del Cliente
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            {!! Field::date('fecha:', ['id' => 'fecha'])!!}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            {!! Field::select('clientes:')!!}
                                                            {!! Field::text('telefono:', ['id' => 'telefono', 'placeholder'=>'Ingrese el teléfono'])!!}
                                                        </div>
                                                        <div class="col-md-6">
                                                            {!! Field::text('solicitante:', ['id' => 'solicitante', 'placeholder'=>'Ingrese el solicitante'])!!}
                                                            {!! Field::text('fax:', ['id' => 'fax', 'placeholder'=>'Ingrese el fax'])!!}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <p class="navbar-text navbar-right" style="margin-top: 10px;margin-right: 15px;">
                                                            <a class="btn btn-info" href="#" data-toggle='modal' data-target='#myModal'>
                                                                <span>
                                                                    Agregar
                                                                </span>
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Separación de los colapse -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Datos Generales del Proyecto
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                {!! Field::select('Tipo de producto:')!!}
                                                                {!! Field::text('volumen:', ['placeholder'=>'Volumen'])!!}
                                                                {!! Field::select('caras:', ['1' =>'1 Cara','2' => '2 Caras'])!!}
                                                            </div>
                                                            <div class="col-md-6">
                                                                {!! Field::select('formatos:')!!}
                                                                {!! Field::checkbox('Formato Personalizado:','1'), Field::text(null,['placeholder'=>'Ingrese el formato personalizado','id' => 'formatopers'])!!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- Separación de los colapse -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Datos Especificos
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        <h4>
                                                            <center>Material de la portada</center>
                                                        </h4>
                                                        <div class="col-md-6">
                                                            {!! Field::text('Material de portada:', ['placeholder'=>'Nº de Páginas'])!!}
                                                        </div>
                                                        <div class="col-md-6">
                                                            {!! Field::select('Tipo de material:')!!}
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
                                                            {!! Field::select('Tipo de material 1:')!!}
                                                            {!! Field::select('Tipo de material 2:')!!}
                                                            {!! Field::select('Tipo de material 3:')!!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Separación de los colapse -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingfour">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                            Datos Adicionales
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                                    <div class="panel-body">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    {!! Field::select('Tipo de producto:')!!}
                                                                    {!! Field::text('volumen:', ['placeholder'=>'Volumen'])!!}
                                                                    {!! Field::select('caras:', ['1' =>'1 Cara','2' => '2 Caras'])!!}
                                                                </div>
                                                                <div class="col-md-6">
                                                                    {!! Field::select('formatos:')!!}
                                                                    {!! Field::checkbox('Formato Personalizado:','1'), Field::text(null,['placeholder'=>'Ingrese el formato personalizado','id' => 'formatopers'])!!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fín de los colapse -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- cambio de tab-->
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h3>
                                            Calculos
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
                        <!-- Fín de las tabs -->
				    </div>
			    </div>
		    </div>
	    </div>
	</div>
@endsection
