@extends('home')
@section('title','M-Web Sucursales')
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
@foreach($sucursales as $sucursal)     
	<tr>
		<td>{{ $sucursal->id }}</td>
		<td>{{ $sucursal->comuna->name }}</td>
		<td>{{ $sucursal->address }}</td>
		<td>{{ $sucursal->work->name }}</td>
		<td>{{ $sucursal->work->fono }}</td>
		<td>{{ $sucursal->work->email }}</td>
		<td>
			<form method="POST" action="{{ url('/deleteSucursal/'.$sucursal->id) }}">
				{{ csrf_field() }}
                {{ method_field('DELETE') }}
				<a href="{{ url('/sucursal/'.$sucursal->id.'/edit') }}"><i class="blue-text material-icons">edit</i></a>
				<button type="submit"><i class="red-text material-icons">delete</i></button>
			</form>
		</td>
	</tr>
@endforeach
	</tbody>
</table>
<div class="center-align">
  {{ $sucursales->links() }}      
</div>
</div>
@endsection