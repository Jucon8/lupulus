<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<?php include("head.php")?>


		<title>Registrarse</title>
	</head>
	<body>
		    <main>
					<?php include("header.php") ?>
						<!--Inicio de LOGIN -->
						<div class="container-fluid loginimg pt-5">

								<div class="col-sm-9 col-md-6 col-lg-5 rounded bg-white pt-1 pb-3" id="formulario">
									<div class="text-center">
										<h2 class="p-3">registrarse</h2>
									</div>
									<form class="container col-md-9 col-lg-12" id="register-form" action="#REGISTRARSE" method="post" role="form">
										<div class="form-group">
 											 <input type="text" name="username" id="username-registro" tabindex="1" class="form-control" placeholder="Usuario" value="">
 									 </div>
 									 <div class="form-group">
 											 <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo electronico" value="">
 									 </div>
 									 <div class="form-group">
 											 <input type="password" name="password" id="password-registro" tabindex="2" class="form-control" placeholder="Contraseña">
 									 </div>
 									 <div class="form-group">
 											 <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar contraseña">
 									 </div>
									 <div class="col-lg-6 pb-3" id="formulario">
												 <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Crear cuenta">
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
