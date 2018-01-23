@extends('layout.layout')

@section ('title', 'Inicio de session')

@section ('titulo', 'Inicio de session')

@section('content')
<div class="row">
  <div class="section"></div>
    <main>
      <center>
          <img class="responsive-img" style="width: 100px" src="img/icons2.png"" />
          <div class="section"></div>
          <div class="container">
            <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
              <form class="col s12" method="post">
                <div class='row'>
                  <div class='col s12'>
                  </div>
                </div>
                <div class='row'>
                  <div class='input-field col s12'>
                    <i class="material-icons prefix">account_box</i>
                    <input id="icon_prefix" type="text" class="validate" type='email' name='email' id='email'>
                    <label for='email'>Ingrese su usuario</label>
                  </div>
                </div>
                <div class='row'>
                  <div class='input-field col s12'>
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="icon_prefix" type="text" class="validate" type='password' name='password' id='password'>
                    <label for="icon_prefix">Ingrese su contraseña</label>
                  </div>
                <!--
                  <label style='float: right;'>
                    <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                  </label>
                -->
                </div>
                <br />
                <center>
                  <div class='row'>
                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Iniciar Session</button>
                  </div>
                </center>
              </form>
            </div>
          </div>
          <a href="{{ url('register') }}">Crear una cuenta</a>
        </center>
    </main>
  </div>
</div>
