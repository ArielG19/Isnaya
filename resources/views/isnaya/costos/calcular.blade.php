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
                            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Cálculos</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="panel panel-info">
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
                                                                <span>Agregar</span>
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
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Datos Especificos
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <h4>
                                                        <center>Material de la portada</center>
                                                    </h4>
                                                    <div class="col-md-4">
                                                        {!! Field::text('Material de portada:', ['placeholder'=>'Nº de Páginas'])!!}
                                                    </div>
                                                    <div class="col-md-4">
                                                        {!! Field::select('Tipo de material:')!!}
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
                                                        {!! Field::select('Tipo de material 1:')!!}
                                                        {!! Field::select('Tipo de material 2:')!!}
                                                        {!! Field::select('Tipo de material 3:')!!}
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
                                                    	{!! Field::select('color:')!!}
                                                        {!! Field::select('color:')!!}
													</div>
													<div class="col-md-2 col-sm-6">	
                                                    	{!! Field::text('Páginas:', ['placeholder' => 'Nº Páginas'])!!}	
                                                        {!! Field::text('Páginas:', ['placeholder' => 'Nº Páginas'])!!}
													</div>
													<div class="col-md-2 col-sm-6">	
                                                    	{!! Field::select('color:')!!}
														{!! Field::select('color:')!!}
													</div>
													<div class="col-md-2 col-sm-6">
														{!! Field::text('Páginas:', ['placeholder' => 'Nº Páginas'])!!}							
                                                        {!! Field::text('Páginas:', ['placeholder' => 'Nº Páginas'])!!}							
                                                    </div>											
                                                    <div class="col-md-2 col-sm-6">	
                                                    	{!! Field::select('color:')!!}	
                                                        {!! Field::select('color:')!!}
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
                                                        <h4>
                                                    	   <center>Encuadernación</center>			
                                                        </h4>
                                                        <div class="row">							
                                                            <div class="col-md-6">						<div class="col-md-3">
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
                                                        </div>
                                                        <h4>	
                                                        	<center>Arte y Diseño</center>
                                                        </h4>
                                                        <div class="row">
                                                        	<div class="col-md-6">					 
                                                                <div class="col-md-6">				 
                                                                    {!! Field::radio('Imprenta')!!}
                                                                </div>								
                                                                <div class="col-md-6">					{!! Field::radio('Cliente')!!}	
                                                                </div>								
                                                            </div>	
                                                        </div>
                                                        <div class="row">	
                                                        	{!! Field::textarea('Otros datos:')!!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- Fín de los colapse -->
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!-- cambio de tab-->
                        <div role="tabpanel" class="tab-pane" id="profile">
							<div class="panel-info">
								<div class="panel-heading">
									<h4>
										<center>Cálculos de los costos</center>
									</h4>
								</div>
								<div class="panel-body">
									<div class="row">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                                        Costos de papel
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                                                <div class="panel-body">
                                                    <div class="container-fluid">                                 
                                                        <div class="col-md-12">
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Separación de los colapse -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading2">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                        Costos de Portada
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                                <div class="panel-body">
                                                    <div class="container-fluid">
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
                                                            {!! Field::text('Master electrostático o Láser:', ['placeholder' => '0'])!!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Separación de los colapse -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading3">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                        Costo de Láminas
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                                <div class="panel-body">
                                                    <div class="container-fluid">
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
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Separación de los colapse -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading4">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                        Tintas offset
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                                <div class="panel-body">
                                                    <div class="container-fluid">
                                                        <div class="col-md-3">
                                                            {!! Field::text('Tintas offset:') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Separación de los colapse -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading5">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                                        Mano de Obra
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                                <div class="panel-body">
                                                    <div class="container-fluid">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- separación colapse -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading7">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                                        Totales
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                                <div class="panel-body">
                                                    <div class="container-fluid">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fin de los colapse -->
                                        <button type="submit" class="btn btn-info">Almacenar</button>
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
