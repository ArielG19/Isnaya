@extends('layouts.app')
@include('isnaya/template.nav')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Mi perfil</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <img src="imagenes/perfil/{{$user->imagen}}" 
                                 style="width: 250px; height: 250px; float: left;border-radius: 5%; margin-right: 25px;">
                        </div>
                        <div class="col-md-4 ">
                                <div class="list-group">
                                    <a href="#" class="list-group-item disabled">
                                        Informaciòn basica:
                                    </a>
                                    <span class="list-group-item">Nombre: {{$user->name}}</span>
                                    <span class="list-group-item">Cargo: {{$user->cargo}}</span>
                                    <span class="list-group-item">Tipo: {{$user->type}}</span>
                                    <span class="list-group-item">Correo: {{$user->email}}</span>
                                    
                                </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                          <div class="col-md-6">
                            <form enctype="multipart/form-data" action="/perfil" method="POST">
                            <h3><label for="">Actualizar imagen de perfil</label></h3>
                            <input type="file" name="imagen">
                            <input type="hidden" name="_token" value="{{csrf_token ()}}">
                            <br>
                            <input type="submit" value="Actualizar" class="pull-left btn btn-sm btn-primary">
                        </form>
                        </div> 
                    </div>     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection