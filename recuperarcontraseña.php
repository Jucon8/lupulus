<?php
session_start();

$titulo = "Recuperar contraseña";

require_once 'controladores/validaciones.php';


$erroresLogin = [];

if ($_POST) {
	$erroresLogin = ValidarTodo();
	if (count($erroresLogin)==0) {
		// Logue de Usuario //
		$usuariosRegistrados = file_get_contents("usuarios.json");
		$usuariosRegistrados = explode(PHP_EOL,$usuariosRegistrados);
		array_pop($usuariosRegistrados);
		foreach ($usuariosRegistrados as $usuario) {
			$usuarioDecode = json_decode($usuario, true);
			if ($_POST["email"] == $usuarioDecode["email"]) {
				if (password_verify($_POST["password"], $usuarioDecode["password"])) {
					$_SESSION["email"] = $usuarioDecode["email"];
					$_SESSION["username"] = $usuarioDecode["username"];
					$_SESSION["apellido"] = $usuarioDecode["apellido"];
					$_SESSION["direccion"] = $usuarioDecode["direccion"];
					$_SESSION["telefono"] = $usuarioDecode["telefono"];
					$_SESSION["ciudad"] = $usuarioDecode["ciudad"];
					$_SESSION["avatar"] = $usuarioDecode["avatar"];
					if (isset($_POST["recordarme"]) && $_POST["recordarme"] == "on") {
						setcookie("usuarioEmail", $usuarioDecode["email"], time() +60+60+24+7);
						setcookie("usuarioPassword", $usuarioDecode["password"], time() +60+60+24+7);
					}
					header("Location: tienda-lista.php");
				}
			}
		}
	}
}
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <?php require_once 'head.php' ?>
</head>

<body>


  <!--Inicio header-->
  <?php require_once 'header.php' ?>

  <!--Inicio de LOGIN -->
  <div class="container-fluid loginimg" id="formularioGeneral">

    <div class="col-sm-9 col-md-6 col-lg-5 rounded bg-white pt-1 pb-3" id="formulario">
      <div class="text-center">
        <h2 class="p-3">Recuperar contraseña</h2>
      </div>
      <form class="container col-md-9 col-lg-12" method="POST" action="" id="login-form">
        <div class="form-group">
          <label for="username"></label>
          <input type="email" name="email" id="email" class="form-control" placeholder="e-mail" value="<?= persistirDatos('email', $erroresLogin) ?>">
          <?php
          if (isset($erroresLogin['email'])) {
            foreach ($erroresLogin['email'] as  $value) {
              echo "<small class='text-danger'>" . $value . "</small><br>";
            }
          } ?>
        
        </div>
        
        <div class="text-center pb-3">
          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="col-lg-6 form-control btn btn-login btn-warning" value="Recuperar contraseña">
        </div>
        
      </form>
    </div>
  </div>


  <footer>
   <!-- Desarrolado por -->
  <footer>
    <?php require 'footer.php' ?>
  </footer>
  <!-- Fin del Footer -->
  <!-- Optional JavaScript -->
  <?php require_once 'scripts.php' ?>
</body>
