@extends('layouts.app')
@include('isnaya/template.nav')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" id="perfil-bordes"><i><b>Informacion de usuario</b></i></div>
                <div class="panel-body" id="perfil-bor">
                    <div class="row">
                        <div class="col-md12">
                            <div class="col-md-6" style="padding-left:90px;">
                                    <br>
                                    Nombre: <b id="perfil-name">{{$user->name}}</b>
                                    <br><br>
                                    Correo: <b id="perfil-name">{{$user->email}}</b>
                                    <br><br>
                                    
                                    @if($user->type =="admin")
<<<<<<< HEAD
                                          <img src="/imagenes/perfil/tipo/admin.png"  class="img-responsive"
                                          style="float: left;border-radius: 5%;">
                                    @else
                                          <img src="/imagenes/perfil/tipo/user.jpg" class="img-responsive" 
                                          style="float: left;border-radius: 5%;">
                                    @endif
                            </div>
                            <div class="col-md-6" style="padding-left:50px;border-left: 4px solid #9E9E9E;">
                                   <img src="/imagenes/perfil/{{$user->imagen}}" class="img-responsive"
                                         style="float: left;border-radius: 5%;">
=======
                                          <img src="/imagenes/perfil/tipo/bleach.jpg" 
                                          style="width: 300px; height: 300px; float: left;border-radius: 5%; margin-right: 25px;">
                                    @else
                                          <img src="/imagenes/perfil/tipo/hollow.jpg" 
                                          style="width: 300px; height: 300px; float: left;border-radius: 5%; margin-right: 25px;">
                                    @endif
                            </div>
                            <div class="col-md-6" style="padding-left:50px;border-left: 4px solid #9E9E9E;">
                                   <img src="/imagenes/perfil/{{$user->imagen}}" 
                                         style="width: 400px; height: 400px; float: left;border-radius: 5%; margin-right: 25px;">
>>>>>>> 78a842b363c5d00bf787af3815cca38272718918
                                   <form enctype="multipart/form-data" action="/perfil" method="POST">
                                        <h3><label for="">Actualizar imagen de perfil</label></h3>
                                        <input type="file" name="imagen">
                                        <input type="hidden" name="_token" value="{{csrf_token ()}}">
                                        <hr style="border-top: 4px solid #9E9E9E;">
                                        <input type="submit" value="Actualizar" class="pull-right btn btn-sm btn-info">
                                    </form>

                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <br><br>
        </div>
    </div>
</div>
@endsection