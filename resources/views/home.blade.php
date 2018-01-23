@extends('layouts.app')

@section('menu-bar')
  <div class="row">
  </div>
</div>
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col l3">
      <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator circle" src="{{ url('img/MODULO/iconomapa.png') }}" >
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Sucursales<i class="material-icons right">more_vert</i></span>
          <p><a href="{{ url('/sucursales') }}">Ir a la ruta</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Sucursales<i class="material-icons right">close</i></span>
          <p>Aqui podras crear las sucursales de nuestra empresa, asignado el correspondiente encargado de sucursal</p>
        </div>
      </div>
    </div>
    <div class="col l3">
      <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="{{ url('img/MODULO/addUser.png') }}">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Trabajador<i class="material-icons right">more_vert</i></span>
          <p><a href="{{ url('/trabajadores') }}">Ir a la ruta</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Trabajador<i class="material-icons right">close</i></span>
          <p>Aqui podras crear un trabajador para asignarlo como encargado de sucursal, como jefe de algun departamento o para algun proceso que lo necesites.</p>
        </div>
      </div>
    </div>
    <div class="col l3">
      <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/office.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
          <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
    </div>
    <div class="col l3">
      <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/office.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
          <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col l3">
      <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator circle" src="{{ url('img/MODULO/iconomapa.png') }}" >
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Sucursales<i class="material-icons right">more_vert</i></span>
          <p><a href="{{ url('/sucursales') }}">Ir a la ruta</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Sucursales<i class="material-icons right">close</i></span>
          <p>Aqui podras crear las sucursales de nuestra empresa, asignado el correspondiente encargado de sucursal</p>
        </div>
      </div>
    </div>
    <div class="col l3">
      <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="{{ url('img/MODULO/addUser.png') }}">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Trabajador<i class="material-icons right">more_vert</i></span>
          <p><a href="#">Ir a la ruta</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Trabajador<i class="material-icons right">close</i></span>
          <p>Aqui podras crear un trabajador para asignarlo como encargado de sucursal, como jefe de algun departamento o para algun proceso que lo necesites.</p>
        </div>
      </div>
    </div>
    <div class="col l3">
      <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/office.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
          <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
    </div>
    <div class="col l3">
      <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/office.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
          <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
    </div>
  </div>
  <!--
<div class="row">
  <div class="col l1" style="background-color: red;height: 100px">  
  </div>
  <div class="col l1" style="background-color: blue;height: 100px">  
  </div>
  <div class="col l1" style="background-color: green;height: 100px">  
  </div>
  <div class="col l1" style="background-color: yellow;height: 100px">  
  </div>
  <div class="col l1" style="background-color: #262605;height: 100px">  
  </div>
  <div class="col l1" style="background-color: #666F8D;height: 100px">  
  </div>
  <div class="col l1" style="background-color: red;height: 100px">  
  </div>
  <div class="col l1" style="background-color: blue;height: 100px">  
  </div>
  <div class="col l1" style="background-color: green;height: 100px">  
  </div>
  <div class="col l1" style="background-color: yellow;height: 100px">  
  </div>
  <div class="col l1" style="background-color: #262605;height: 100px">  
  </div>
  <div class="col l1" style="background-color: #666F8D;height: 100px">  
  </div>
</div>
-->
</div>
@endsection



