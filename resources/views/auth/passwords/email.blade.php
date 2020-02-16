@extends('layouts.header')
@section('titulo')
Resetear contraseña
@endsection
@section('contenido')

<div class="container-fluid loginimg" id="formularioGeneral">
    <div class="col-sm-9 col-md-6 rounded pt-1 pb-3" id="formulario">
      <div class="text-center">
        <h2 class="p-3">{{ __('Resetear Contraseña') }}</h2>
      </div>
                <div class="container-fluid">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form class="container col-md-12" id="login-form"  method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group text-center">
                    <label for="email" class="">{{ __('Ingrese su email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-0">
                    <div class="text-center pb-3">
                        <button type="submit" class="col-lg-6 form-control btn btn-login btn-warning">
                            {{ __('Enviar link de reseteo') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection
