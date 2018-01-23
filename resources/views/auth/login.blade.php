@extends('layouts.app')
@section('content')
<div class="container">
<div class="section"></div>
  <main>
    <center>
      <div class="section"></div>
      <h5 class="green-text"><strong>Inicio de session</strong></h5>
        <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
          <form class="col s12" method="POST" action="{{ route('login') }}">
            {{  csrf_field() }}
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            <div class='row'>
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input d="username" name="username" type="text" class="validate" value="{{ old('username') }}" required autofocus>
              <label for="icon_prefix">Nombre de usuario</label>
              @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                 @endif
            </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                <i class="material-icons prefix">vpn_key</i>
                <input class='validate' id="password" type="password" name="password" required />
                <label for='password'>Ingresa tu contraseña</label>
              </div>
              <label style='float: right;'>
                <a class='pink-text' href="{{ route('password.request') }}"><b>Recuperar contraseña</b></a>
              </label>

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif

            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect green'>Iniciar session</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href="{{ url('register') }}">Crear una cuenta</a>
    </center>
    <div class="section"></div>
    <div class="section"></div>
  </main>
</div>
@endsection