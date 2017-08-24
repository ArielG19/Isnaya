@extends('isnaya.template.main')

@section('contenido')
<div class="container">

    <div class="row" id="contenedorPrincipal">
        <div class="col-md-12 col-sm-12">
            <div class="col-md-1">
            
            </div> 
            <div class="col-md-5 col-sm-6 col-xs-6">
                <div class="col-md-12 col-sm-12" id="inicio1">
                    <br>
                    <div class="col-md-12 col-sm-12">
	                    <center>
		                    <img src="img/ISNAYA-01.png" alt="" class="img-responsive">
	                    </center>
                        <br><br>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <center>
                            <button type="button" class="btn btn-yellow-big">Funciones</button>
                        </center>
                        <br>
                        <center>  
                            <h5>Ingrese y revise productos, rubros, clientes, colores y formatos</h5>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-6 col-xs-6">
                <div class="col-md-12 col-sm-12" id="inicio2">
                    <br>
                    <div class="col-md-12 col-sm-12">
	                    <center>
		                    <img src="img/ISNAYA-02.png" alt="" class="img-responsive">
	                    </center>
                        <br><br> 
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <center>
                            <a class="btn btn-info btn-magenta-big" href="/proformas">
							    <span>
								    Proformas
							    </span>
              			    </a>
                            
                        </center>
                        <br>
                        <center>        
                            <h5>Agregue y calcule nuevas proformas llevando una lista detallada de la compra.</h5>
                        </center> 
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
