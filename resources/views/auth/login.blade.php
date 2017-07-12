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
                </center>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="input-group">
                                <span class="input-group-addon" id="sizing-addon1"><b>Usuario</b></span>
                                <input id="email"  type="email" class="text-reset sinborde" name="email" value="{{ old('email') }}" required autofocus placeholder="Ingrese su usuario...">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <hr class="linea">
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="input-group">
                                <span class="input-group-addon" id="sizing-addon1"><b>Contraseña</b></span>
                                <input id="password" type="password" class="text-reset sinborde" name="password" required placeholder="Ingrese su contraseña">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <hr class="linea">
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
                    </div>--}}
                    <br>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary btn-cian-login">
                                Entrar
                            </button>
                            <br><br>
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                <span class="glyphicon glyphicon-triangle-right">¿Olvidaste tu contraseña?</span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
