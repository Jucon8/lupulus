<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<?php include("head.php")?>


		<title>Iniciar Sesión</title>
	</head>
	<body>
		    <main>
					<?php include("header.php") ?>
						<!--Inicio de LOGIN -->
						<div class="container-fluid loginimg pt-5">

								<div class="col-sm-9 col-md-6 col-lg-5 rounded bg-white pt-1 pb-3" id="formulario">
									<div class="text-center">
										<h2 class="p-3">iniciar sesión</h2>
									</div>
									<form class="container col-md-9 col-lg-12" method="POST"  action="#LOGIN" id="login-form">
								   <div class="form-group">
								     <input type="text" name="username" id="username-inicio" tabindex="1" class="form-control" placeholder="Usuario" value="">
								   </div>
								   <div class="form-group">
								     <input type="password" name="password" id="password-inicio" tabindex="2" class="form-control" placeholder="Contraseña">
								   </div>
								   <div class="form-group form-check text-center">
										 <input type="checkbox" tabindex="3" class="form-check-input" name="remember" id="remember">
								     <label class="form-check-label" for="remember">Recordarme</label>
								   </div>
									 <div class="text-center pb-3">
										 <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="col-lg-6 form-control btn btn-login" value="Iniciar sesión">
									 </div>
									 <div class="text-center">
										 <a href="#RECUPERARCONTRASEÑA" tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
									 </div>
								 </form>
								</div>
							</div>
				</main>

		<footer>
			<?php include("./desarroladoPor.php")?>
		</footer>
		<?php include_once("scripts.php") ?>
	</body>
</html>
