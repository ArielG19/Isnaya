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
    <div class="col-md-6">
      <div class="panel panel-primary">
       <div class="panel-heading">
          <h2><center>Gestión de Rubros de Isnaya Print</center></h2>
       </div>
        <div class="panel-body">
          {!!Form::open(['route'=>'rubros.store','method'=>'POST'])!!}
            <div class="form-group">
              {!!Form::label('Descripcion:')!!}
              {!!form::textarea('descripcion',null,['id'=>'descripcion','class'=>'form-control','row'=>'2','placeholder'=>'Escriba una descripcion'])!!}
            </div>
            <div class="form-group">
              {!!Form::label('Cantidad:')!!}
              {!!form::text('cantidad',null,['id'=>'cantidad','class'=>'form-control','placeholder'=>'Escriba la cantidad'])!!}
            </div>
            <div class="form-group">
              {!!Form::label('Costo:')!!}
              {!!form::text('costo',null,['id'=>'costo','class'=>'form-control','placeholder'=>'Escriba el costo'])!!}
            </div>
            <div class="form-group">
              {!!Form::label('Tipo:')!!}
              {!!form::text('tipo',null,['id'=>'tipo','class'=>'form-control','placeholder'=>'Escriba el tipo de rubro'])!!}
            </div>
            <div class="form-group">
             {!!link_to('#','Guardar',['id'=>'guardarRubro','class'=>'btn btn-primary btn-sm-mt-10'])!!}
            </div>
          {!!Form::close()!!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('/js/prueba.js')}}"></script>
@endsection