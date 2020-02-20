@extends('layouts.header')
@section('titulo')
Iniciar Sesión
@endsection

@section('contenido')
  <!--Inicio de LOGIN -->

  <div class="container-fluid loginimg" id="formularioGeneral">
    <div class="col-sm-9 col-md-6 col-lg-5 rounded pt-1 pb-3" id="formulario">
      <div class="text-center">
        <h2 class="p-3">{{ __('Conectarse') }}</h2>
      </div>

      <form class="container col-md-9 col-lg-12" id="login-form" method="POST" action="{{ route('login') }}">
      @csrf
        <div class="form-group">
          <label hidden for="email">{{ __('E-Mail') }}</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label hidden for="password">{{ __('Password') }}</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group form-check text-center">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" value="{{ old('remember') ? 'checked': '' }}">
        <label class="form-check-label" for="remember"> {{ __('Recordarme') }} </label>
        </div>

        <div class="text-center pb-3">
          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="col-lg-6 form-control btn btn-login btn-warning" value="{{ __('Login') }}">
        </div>

        <div class="text-center">
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}"> {{ __('Olvidé mi contraseña') }} </a>
        @endif
        </div>
      </form>
<br>
<br>
<br><br>
    </div>
    <br>
    <br>
    <br>
  </div>

@endsection
