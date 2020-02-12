@extends('layouts.header')
@section('titulo')
$titulo = "Registrarse";
@endsection
@section('contenido')



	<!--Inicio de REGISTRARSE -->

		<div class="container-fluid loginimg pt-5" id="formularioGeneral">

			<div class="col-sm-9 col-md-6 col-lg-5 rounded pt-1 pb-3" id="formulario">
				<div class="text-center">
					<h2 class="p-3">{{ __('Registrarse') }}</h2>
				</div>
				<form class="container col-md-9 col-lg-12" id="register-form" action="" method="POST" action="{{ route('register') }}" role="form" enctype="multipart/form-data">
                @csrf

                    <div class="form-group">
                        <label hidden for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Nombre de usuario">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

					<div class="form-group">
                        <label hidden for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electrónico">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="avatar">Subí tu avatar (Opcional)</label>
						<input type="file" class="form-control-file" name="avatar" enctype="multipart/form-data" accept= "image/*">
                        @error('avatar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

					<div class="form-group">
                    <label hidden for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
					</div>

					<div class="text-center w-50 border border-secondary rounded" id="formulario">
						<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn-warning" value="{{ __('Crear cuenta') }}">
					</div>
				</form>
			</div>
		</div>

@endsection