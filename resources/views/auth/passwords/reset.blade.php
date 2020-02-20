@extends('layouts.header')
@section('titulo')
cambiar contraseña
@endsection
@section('contenido')
<div class="container-fluid loginimg" id="formularioGeneral">
<br>
<br>
<br>
<br>
    <div class="col-sm-9 col-md-6 rounded pt-1 pb-3" id="formulario">
      <div class="text-center">
        <h2 class="p-3">{{ __('Resetear Contraseña') }}</h2>
      </div>
      <div class="container-fluid">
            <form class="container-fluid" id="login-form" method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                    <div class="col-md-8">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                    <div class="col-md-8">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group mb-0">
                    <div class="text-center pb-3">
                        <button type="submit" class="col-xl-6 form-control btn btn-login btn-warning">
                            {{ __('Resetear Contraseña') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <br>
    </div>
    <br>
    <br>
    <br>
    <br>
</div>
@endsection