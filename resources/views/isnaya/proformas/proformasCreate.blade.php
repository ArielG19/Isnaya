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
                                                      {!! Field::date('fecha') !!}
                                                      {!! Field::text('cliente:', ['id' => 'cliente', 'placeholder'=>'Ingrese el Cliente' ]) !!}
                                                      {!! Field::text('solicitante:', ['id' => 'cliente','placeholder'=>'Ingrese el Solicitante']) !!}
                                                      {!! Field::text('telefono:', ['id' => 'telefono', 'placeholder'=>'Escriba el Teléfono'])!!}
                                                  </div>
                                              </div>
                                          </div>

                                          <div role="tabpanel" class="tab-pane" id="profile">
                                              <div class="row">
                                                      <div class="col-md-6">
                                                          {!!Form::open(['id'=>'form'])!!} 
                                                          {!! Field::text('producto:', ['id' => 'producto'])!!}
                                                          {!! Field::text('cantidad:', ['id' => 'cantidad'])!!}
                                                          {!! Field::text('total:', ['id' => 'tot_prod'])!!}

                                                      </div>
                                              </div>                       
                                          </div>

                                          <div role="tabpanel" class="tab-pane" id="messages">
                                                <div class="row">
                                                      <div class="col-md-6">
                                                          {!! Field::text('producto:', ['id' => 'producto'])!!}

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
</div>
@endsection