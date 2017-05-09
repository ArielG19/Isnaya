@extends('isnaya.template.main')

@section('title','Proformas')

@section('css')
  <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
@endsection


@section('contenido')

<div class="row">
        <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-primary">
                              <div class="panel-heading">
                                  <div class="panel-title">
                                    Agregar Proforma
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
                                                  <div class="col-md-6">
                                                      {!!Form::open(['id'=>'form'])!!}
                                                        <div class="form-group">
                                                            {!!form::label('Numero de pagina:')!!}
                                                            {!!form::text('num_pag',null,['id'=>'num_pag','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                                                        </div>

                                                        <div class="form-group">
                                                            {!!form::label('Solicitante:')!!}
                                                            {!!form::text('solicitante',null,['id'=>'solicitante','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                                                        </div>

                                                        <div class="form-group">
                                                            {!!form::label('Caras:')!!}
                                                            {!!form::text('caras',null,['id'=>'caras','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                                                        </div>

                                                        <div class="form-group">
                                                            {!!form::label('Volumen:')!!}
                                                            {!!form::text('volumen',null,['id'=>'volumen','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                                                        </div>

                                                        <div class="form-group ">
                                                            {!!form::label('Subtotal:')!!}
                                                            {!!form::text('subtotal',null,['id'=>'subtotal','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                                                        </div>  
                                             
                                                  </div>
                                              </div>
                                          </div>

                                          <div role="tabpanel" class="tab-pane" id="profile">
                                              <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="form-group ">
                                                              {!!form::label('Gastos:')!!}
                                                              {!!form::text('gastos',null,['id'=>'gastos','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                                                          </div>

                                                          <div class="form-group ">
                                                              {!!form::label('Costo Total:')!!}
                                                              {!!form::text('costo_total',null,['id'=>'costo_total','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                                                          </div>

                                                          <div class="form-group ">
                                                              {!!form::label('Utilidad Bruta:')!!}
                                                              {!!form::text('utilidad_bruta',null,['id'=>'utilidad_bruta','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                                                          </div>

                                                          <div class="form-group ">
                                                              {!!form::label('Valor de venta:')!!}
                                                              {!!form::text('valor_venta',null,['id'=>'valor_venta','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                                                          </div>

                                                          <div class="form-group ">
                                                              {!!form::label('Precio de Venta:')!!}
                                                              {!!form::text('precio_venta',null,['id'=>'precio_venta','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                                                          </div>
                                                      </div>
                                              </div>                       
                                          </div>

                                          <div role="tabpanel" class="tab-pane" id="messages">
                                                <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="form-group ">
                                                              {!!form::label('Descuento:')!!}
                                                              {!!form::text('descuento',null,['id'=>'descuento','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                                                          </div>
                                                          
                                                          <div class="form-group ">
                                                              {!!form::label('Iva:')!!}
                                                              {!!form::text('iva',null,['id'=>'iva','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                                                          </div>


                                                          <div class="form-group ">
                                                              {!!form::label('Estado:')!!}
                                                              {!!Form::select('estado',[''=>'Seleccione un estado de Proforma','activo'=>'Activo','inactivo'=>'Inactivo'],null,['id'=>'estado','class'=>'form-control'])!!}
                                                          </div>

                                                          <div class="form-group ">
                                                              {!!form::label('Fecha:')!!}
                                                              {!!form::text('fecha',null,['id'=>'fecha','class'=>'form-control','placeholder'=>'Escriba el formato'])!!}
                                                          </div>

                                                         <div class="form-group">
                                                            {!!Form::label('Tipo')!!}
                                                            {!!Form::select('tipo',[''=>'Seleccione un acciòn de Proforma','echa'=>'Hecha','completada'=>'Completada'],null,['id'=>'tipo','class'=>'form-control'])!!}
                                                          </div>

                                                      </div>
                                                </div>                       
                                          </div>
                                          <div role="tabpanel" class="tab-pane" id="settings">
                                              <div class="row">
                                                    <div class="col-md-6">
                                                     <div class="form-group">
                                                            {!!form::label('Producto:')!!}
                                                            {!!form::select('id_producto',$producto,null,['id'=>'id_producto','class'=>'form-control'])!!}
                                                        </div>

                                                        <div class="form-group">
                                                            {!!form::label('Formato:')!!}
                                                            {!!form::select('id_formato',$formato,null,['id'=>'id_formato','class'=>'form-control'])!!}
                                                        </div>

                                                         <div class="form-group">
                                                            {!!form::label('Cliente:')!!}
                                                            {!!form::select('id',$clientes,null,['id'=>'id_cliente','class'=>'form-control'])!!}
                                                          </div>

                                                          <div class="form-group">
                                                              {!!form::label('Usuario:')!!}
                                                              {!!form::select('id_usuario',$user,null,['id'=>'id_usuario','class'=>'form-control'])!!}
                                                          </div>
                                                        <div class="form-group ">
                                                            {!!link_to('#','Guardar',['id'=>'guardar','class'=>'btn btn-primary btn-sm-mt-10'])!!}
                                                        </div>
                                                        
                                                         {!! Form::close() !!} 
                                                    </div>
                                              </div>                       
                                         </div>
                                  </div>
                          </div>
                  </div>
        </div>
</div>

@section('script')
<script>
        $("#guardar").click(function(event){
                  //recuperamos el valor del input descripcion
                  var num_pag = $("#num_pag").val();
                  var solicitante = $("#solicitante").val();
                  var caras = $("#caras").val();
                  var volumen = $("#volumen").val();
                  var subtotal = $("#subtotal").val();
                  var gastos = $("#gastos").val();
                  var costo_total = $("#costo_total").val();
                  var utilidad_bruta = $("#utilidad_bruta").val();
                  var valor_venta = $("#valor_venta").val();
                  var precio_venta = $("#precio_venta").val();
                  var descuento = $("#descuento").val();
                  var iva = $("#iva").val();
                  var fecha = $("#fecha").val();
                  var tipo = $("#tipo").val();
                  var estado = $("#estado").val();
                  var id_producto = $("#id_producto").val();
                  var id_formato = $("#id_formato").val();
                  var id_cliente = $("#id_cliente").val();
                  var id_usuario = $("#id_usuario").val();
        
                  //recuperamos la informacion del token
                  var token = $("input[name=_token]").val();

                  //la ruta donde se envia la informacion del formulario
                  var route = "{{route('proformas.store')}}";
                  $.ajax({
                      url:route,
                      headers:{'X-CSRF-TOKEN':token},
                      type:'post',
                      datatype:'json',
                      data:{num_pag:num_pag,solicitante:solicitante,caras:caras,volumen:volumen,subtotal:subtotal,gastos:gastos,costo_total:costo_total,utilidad_bruta,valor_venta:valor_venta,precio_venta:precio_venta,descuento:descuento,iva:iva,fecha:fecha,tipo:tipo,estado:estado,id_producto:id_producto,id_formato:id_formato,id_cliente:id_cliente,id_usuario:id_usuario},
                      success:function(data){
                        if(data.success=='true'){
                          alert('Se registro');
                          document.location.href= "{{ route('proformas.index')}}"; 
                        }
                      }

                  });

        });
</script>
@endsection

@endsection