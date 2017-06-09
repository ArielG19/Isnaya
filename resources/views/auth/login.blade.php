@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="col-md-10 col-md-offset-1 log-container">
            <div class="col-md-6">
            <a class="navbar-brand" href="">
                <img id="logo" alt="Isnaya-Print" src="img/logofooter.png" width="160px">
            </a>
            </div>
            <div class="col-md-6">
                <div class="row login">
                    <center>
                        <h3>Iniciar Sesión</h3>
                        <h5>Por favor ingrese su usuario y clave</h5>
                        <br>
                        <br>
                    </center>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Usuario</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control text-reset"  name="email" value="{{ old('email') }}" required autofocus placeholder="Ingrese su usuario...">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Contraseña</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control text-reset" name="password" required placeholder="Ingrese su contraseña">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--<div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                             <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar Contraseña
                                </label>
                            </div>
                        </div>
                    </div>--}}<br><br>
                    <div class="form-group" style="margin-right: -80px;">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary btn-cian-login">
                                Entrar
                            </button>
                            <br><br>
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                <span   style="margin-right:-18px;"></span>¿Olvidaste tu contraseña?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
