@extends('layouts.app')
@section('title', 'M.Web Crear Cuenta')
@section('content')
<br>    
<div class="container">
    <div class="row">
         <div class="row">
            <form class="col s12" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="name" type="text" class="validate" name="name" value="{{ old('name' )}}" required autofocus>
                  @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
                  <label for="icon_prefix">Nombre</label>
                </div>

                <div class="input-field col s6">
                  <i class="material-icons prefix">phone</i>
                  <input class="validate" id="email" type="email"  name="email" value="{{ old('email') }}" required>
                  <label for="icon_telephone">email</label>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="row">
                  <div class="input-field col s6">
                      <i class="material-icons prefix">phone</i>
                      <input class="validate" id="password" type="password" name="password" required>
                      <label for="icon_telephone">email</label>
                       @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                       @endif
                  </div>
                  <div class="input-field col s6">
                      <i class="material-icons prefix">phone</i>
                      <input class="validate" id="password-confirm" type="password" name="password-confirm" required>
                      <label for="icon_telephone">Repetir la contraseña</label>
                  </div>
              </div>
              <div class="row">
                  <div class="input-field col s6">
                      <i class="material-icons prefix">phone</i>
                      <input class="validate" id="lastName" type="text" name="lastName" required>
                      <label for="icon_telephone">Apellido</label>
                       @if ($errors->has('lastName'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lastName') }}</strong>
                            </span>
                       @endif
                  </div>
                  <div class="input-field col s6">
                      <i class="material-icons prefix">phone</i>
                      <input class="validate" id="address" type="text" name="address" required>
                      <label for="icon_telephone">Direccion</label>
                       @if ($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                       @endif
                  </div>
              </div>
              <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                      <input class="validate" id="username" type="text" name="username" required>
                      <label for="icon_telephone">Nombre de usuario</label>
                       @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                       @endif
                  </div>
                  <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                      <input class="validate" id="phone" type="text" name="phone" required>
                      <label for="icon_telephone">Telefono</label>
                  </div>
              </div>
              <div class="row">
                  <div class="col s6 offset-s6">
                    <button type="submit" class="waves-effect waves-light btn" type="submit"><i class="material-icons left">cloud</i>
                        Register
                    </button>
                  </div>
              </div>
            </form>
          </div>
      </div>
  </div>
          <!--
               <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection
