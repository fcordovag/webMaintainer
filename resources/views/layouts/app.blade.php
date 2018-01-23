<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Mantenedor Web CCAF')</title>
    <link rel="shortcut icon" href="{{ asset('img/icons2.png') }}">
    <!-- Styles -->
   <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <!-- Compiled and minified CSS -->
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body>
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<nav class="teal light-1">
  <div class="nav-wrapper">
      <div class="container">
    <a href="#!" class="brand-logo"><img class="responsive" src="{{ url('/img/icons2.png') }}" style="height: 60px;width: 120px" /></a>
    <ul class="right hide-on-med-and-down">
      @guest
        <li><a href="{{ route('login') }}">Inicio de session</a></li>
        <li><a href="{{ route('register') }}">Registro</a></li>
      @else
      <ul id="dropdown1" class="dropdown-content">
        <li>
          <a href="{{ route('logout') }} " onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">  
                   Cerrar Session
          </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
      </ul>  
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }} {{ Auth::user()->lastName }}<i class="material-icons right">arrow_drop_down</i></a></li>
     @endguest
    </ul>
  </div>
</nav>
  @yield('menu-bar')
  @yield('content')
  @include('includes.footer')
</body>
</html>
<script>
  $(document).ready(function(){
    $(".dropdown-button").dropdown();
    $('select').material_select();
    $('.tooltipped').tooltip({delay: 50});
  })
</script>
