@extends('isnaya.template.main')

@section('title')
	Gestion de Rubros
@endsection

@section('css')
	<link rel="stylesheet" href="{{URL::to('css/bootstrap/css/bootstrap.min.css')}}">
@endsection


@section('contenido')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2><center>Gestión de Rubros de Isnaya Print</center></h2>
            </div>
            <div class="panel-body">
              <div class="formularios">
                <form class="form-horizontal" method="post" action="/rubros" enctype="multipart/form-data">
                    {{csrf_field()}}  
					<div class="form-group">
                        <label class="col-md-3 col-xs-3 control-label">Descripción</label>
                        <div class="col-md-7 col-xs-7">
                          <textarea class="form-control" rows="5"  name="descripcion" value=""></textarea><br>
                        </div>
                      </div>   
                      <div class="form-group">
                        <label class="col-md-3 col-xs-3 control-label">Cantidad:</label>
                        <div class="col-md-7 col-xs-7">
                            <input class="form-control" type="text" name="cantidad" value="">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 col-xs-3 control-label">Costo:</label>
                        <div class="col-md-7 col-xs-7">
                            <input class="form-control" type="text" name="costo" value="">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 col-xs-3 control-label">Tipo:</label>
                          <div class="col-md-7 col-xs-7">
                            <input type="text" class="form-control" name="tipo" value="">
                          </div>
                      </div>   
                      <div class="form-group">
                        <div class="col-xs-offset-1 col-xs-10">
                          <center> <input class="btn btn-primary pull-right" type="submit" name='enviar' value="Guardar"></center>
                        </div>
                    </div>                                    
                  </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

