@extends('home')
@section('title','M-Web Trabajadores')
@section('menu-bar')
<div class="row">
	<div class="col s6 l2 offset-l2">
		<label for="">Inicio</label>
		<a class="btn-floating btn-large waves-effect waves-light red tooltipped" href="{{ url('/') }}" data-position="bottom" data-delay="50" data-tooltip="Ir al inicio"><i class="material-icons">home</i></a>
	</div>
	<div class="col s6 l2 offset-l5">
		<a class="btn-floating btn-large waves-effect waves-light green tooltipped" data-delay="50" data-tooltip="Ir a Formulario" href="{{ url('/createSucursal') }}"><i class="material-icons">add</i></a>
		<label for="">Sucursal</label>
	</div>
</div>
@endsection
@section('content')
<div class="container">
<table class="highlight centered responsive-table">
    <thead>
      <tr class="blue white-text">
	    <th>id</th>
	    <th>Comuna</th>
	    <th>Sucursal</th>
	    <th>Contacto</th>
	    <th>Telefono</th>
	    <th>Email</th>
	    <th>Acciones</th>
      </tr>
    </thead>
    <tbody>


	</tbody>
</table>
</div>
@endsection