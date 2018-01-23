@extends('home')
@section('title','M-Web Formulario')
@section('menu-bar')
<div class="row">
	<div class="col s6 l2 offset-l1">
		<a class="btn-floating btn-large waves-effect waves-light red" href="{{ url('/') }}"><i class="material-icons">home</i></a>
	</div>
</div>
@endsection
@section('content')
<div class="container">
	@if ($errors->any())
    <div class="card-panel red lighten-1 white-text center align">
        <ul>
            @foreach ($errors->all() as $error)
            <li><b>{{ $error }}</b></li>
            @endforeach
        </ul>
    </div>
    @endif
    <h3><i class="small material-icons green-text">business</i>&nbsp;Editar Sucursal</h3>
    <form class="" method="POST" action="{{ url('/sucursal/'.$suc->id.'/edit') }}">
    	{{ csrf_field() }}
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">location_on</i>
          <input id="address" name="address" type="text" class="validate" value="{{ old('address', $suc->address) }}">
          <label for="icon_prefix">Direccion Sucursal</label>
        </div>
        <div class="input-field col s12 m6">
        	<i class="material-icons prefix">add_location</i>
  		    <select name="comuna" id="comuna">
  		    	<option value="" disabled selected>Comuna Sucursal</option>
  		    	@foreach ($comunas as $comuna)
  		      		<option value="{{ $comuna->id }}"
                  @if($comuna->id == old('comuna',$suc->comuna_id)) selected @endif>
                  {{ $comuna->name }}</option>
  		    	@endforeach
  		    </select>
  		    <label for="">Comuna sucursal</label>
		    </div>
      </div>
      <div class="row">
      	<div class="input-field col s12 m6">
        	<i class="material-icons prefix">account_circle</i>
		      <select name="encargado" id="encargado" value="{{ old('encargado') }}">
  		      <option value="" disabled selected>Nombre encargado</option>   
  		      @foreach ($works as $work)
  		      <option value="{{ $work->id }}"
              @if($work->id == old('encargado', $suc->work_id)) selected @endif
              >{{ @$work->name }}</option>
  		      @endforeach
		    </select>
		    <label for="">Encargado de Sucursal</label>
		</div>
		<div class="col s12 m6 center-align">
			<button class="waves-effect waves-light btn-large green"><i class="material-icons right">send</i>Guardar</button>
		</div>
      </div>
    </form>
</div>
@endsection