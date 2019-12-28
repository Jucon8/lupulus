<?php
session_start();

require_once("./controladores/validaciones.php");

$erroresEnRegistro = [];

if ($_POST) {
	$erroresEnRegistro = ValidarTodo();

	// Conteo de Errores //
	if (count($erroresEnRegistro) == 0) {
		$usuarioNuevo = [
      "username" => trim($_POST["username"]),
      "email" => trim($_POST["email"]),
      "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
      "apellido" => trim($_POST["apellido"]),
      "direccion" => trim($_POST["direccion"]),
      "ciudad" => trim($_POST["ciudad"]),
      "telefono" => trim($_POST["telefono"]),
			"avatar" => trim($_FILES["avatar"]),
		];
		// Creación de Nuevo Usuario //
		$listaUsuarios = json_encode($usuarioNuevo);
		file_put_contents("usuarios.json", $listaUsuarios . PHP_EOL, FILE_APPEND);
		header("Location: iniciarsesion.php");
	}
}

$titulo = "Registrarse";

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <?php require_once 'head.php'; ?>
</head>

<body>

  <!--Inicio header-->
  <?php require_once 'header.php'; ?>

<!--Inicio de REGISTRARSE -->
<main>
<div class="container-fluid loginimg pt-5" id ="formularioGeneral">

<div class="col-sm-9 col-md-6 col-lg-5 rounded bg-white pt-1 pb-3" id="formulario">
  <div class="text-center">
    <h2 class="p-3">Registrarse</h2>
  </div>
  <form class="container col-md-9 col-lg-12" id="register-form" action="" method="POST" role="form">
    <div class="form-group">
        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="<?=persistirDatos("username",$erroresEnRegistro);?>">
      <!--Validamos el input username  -->
      <?php
      if (isset($erroresEnRegistro["username"])) {
        foreach ($erroresEnRegistro["username"] as $error) {
          echo '<small class = "text-danger">'. $error . '</small><br>';
        }
      }else {
        echo "";
      }
      ?>
    </div>
    <div class="form-group">
        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo electronico" value="<?=persistirDatos("email",$erroresEnRegistro);?>">
        <!--Validamos el input email  -->
        <?php
          if (isset($erroresEnRegistro["email"])) {
            foreach ($erroresEnRegistro["email"] as $error) {
              echo '<small class = "text-danger">' . $error . '</small><br>';
            }
          }else {
            echo "";
            }
      ?>
    </div>

    <div class="form-group">
        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
         <!--Validamos el input password  -->
        <?php
          if (isset($erroresEnRegistro["password"])) {
            foreach ($erroresEnRegistro["password"] as $error) {
              echo '<small class = "text-danger">' . $error . '</small><br>';
            }
          }else {
            echo "";
            }
      ?>
    </div>

    <div class="form-group">
        <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar contraseña">
        <!--Validamos el input confirm-password  -->
        <?php
          if (isset($erroresEnRegistro["confirm-password"])) {
            foreach ($erroresEnRegistro["confirm-password"] as $error) {
              echo '<small class = "text-danger">'.$error.'</small><br>';
            }
          }else {
            echo "";
            }
      ?>
    </div>

   <div class="col-lg-6 pb-3" id="formulario">
         <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-warning" value="Crear cuenta">
   </div>
 </form>
</div>
</div>
</main>

  <footer>
    <?php require_once 'footer.php';
    require_once 'desarrolladoPor.php'
    ?>  </footer>

  <!-- Optional JavaScript -->
  <?php require_once 'scripts.php' ?>

</body>

</html>
