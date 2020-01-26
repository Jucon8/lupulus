<?php
session_start();

require_once("controladores/validaciones.php");
require_once("./class/class-usuario.php");
require_once("./class/class-cliente.php");
require_once("./class/class-tipoCons.php");
require_once("./BasesDeDatos/pdo.php");



$erroresEnRegistro = [];
$erroresEnAvatar = [];

if ($_POST) {
	$erroresEnRegistro = ValidarTodo();

	// Conteo de Errores //
	if (count($erroresEnRegistro) == 0) {

		// obtengo extension del archivo //
		if (!empty($_FILES["avatar"]["name"])) {
      $erroresEnAvatar = validarAvatar();
			if(count($erroresEnAvatar) == 0){
        $extension = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $extension = strtolower($extension);
        //obtengo ruta de archivo //
        $archivoTemporal = $_FILES["avatar"]["tmp_name"];
        //direccion de guardado de avatar //
        $nombreAvatar2 = $_POST["username"] . "_" . uniqid() . "." . $extension;
        move_uploaded_file($archivoTemporal, "img/avatars/" . $nombreAvatar2);
			}
		} else {
			$nombreAvatar2 = "";
		}

		$username = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $avatar = $nombreAvatar2;
		$rol_id = '2';

		$clienteNuevo = new cliente($id, $username, $email, $pass, $rol_id, $avatar);
    $clienteNuevo -> guardar();
		$usuarioRegistrado = cliente:: loguearse($email, $pass);
		if (count($usuarioRegistrado)>0) {
	    if (password_verify($pass, $usuarioRegistrado["pass"])) {
	      $_SESSION["id"]=$usuarioRegistrado["id"];
	      $_SESSION["email"]=$usuarioRegistrado["email"];
	      $_SESSION["username"]=$usuarioRegistrado["username"];
	      $_SESSION["avatar"]=$usuarioRegistrado["avatar"];
	      $_SESSION["nombre"] = $usuarioRegistrado["nombre"];
	      $_SESSION["apellido"] = $usuarioRegistrado["apellido"];
	      $_SESSION["direccion"] = $usuarioRegistrado["direccion"];
	      $_SESSION["telefono"] = $usuarioRegistrado["telefono"];
	      $_SESSION["ciudad"] = $usuarioRegistrado["ciudad"];
	      $_SESSION["provincia"] = $usuarioRegistrado["provincia"];
	      $_SESSION["tipoCons"] = $usuarioRegistrado["tipoCons"];
				$_SESSION["rol_id"] = $usuarioRegistrado["rol_id"];
	      header("Location: shop.php");
			}
		}
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
		<div class="container-fluid loginimg pt-5" id="formularioGeneral">

			<div class="col-sm-9 col-md-6 col-lg-5 rounded pt-1 pb-3" id="formulario">
				<div class="text-center">
					<h2 class="p-3">Registrarse</h2>
				</div>
				<form class="container col-md-9 col-lg-12" id="register-form" action="" method="POST" role="form" enctype="multipart/form-data">

          <div class="form-group">
            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Nombre de usuario" value="<?= persistirDatos("username", $erroresEnRegistro); ?>" required>
            <!--Validamos el input username  -->
            <?php
            if (isset($erroresEnRegistro["username"])) {
              foreach ($erroresEnRegistro["username"] as $error) {
                echo '<small class = "text-danger">' . $error . '</small><br>';
              }
            } else {
              echo "";
            }
            ?>
          </div>

					<div class="form-group">
						<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo electrónico" value="<?= persistirDatos("email", $erroresEnRegistro); ?>">
						<!--Validamos el input email  -->
						<?php
						if (isset($erroresEnRegistro["email"])) {
							foreach ($erroresEnRegistro["email"] as $error) {
								echo '<small class = "text-danger">' . $error . '</small><br>';
							}
						} else {
							echo "";
						}
						?>
					</div>

					<div class="form-group">
						<label for="avatar">Subí tu avatar (Opcional)</label>
						<input type="file" class="form-control-file" name="avatar" enctype="multipart/form-data" accept= "image/*">
						<?php
						if (isset($erroresEnAvatar["avatar"])) {
							foreach ($erroresEnAvatar["avatar"] as $error) {
								echo '<small class = "text-danger">' . $error . '</small><br>';
							}
						} else {
							echo "";
						}
						?>
					</div>

					<div class="form-group">
						<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
						<!--  Validamos el input password  -->
						<?php
						if (isset($erroresEnRegistro["password"])) {
							foreach ($erroresEnRegistro["password"] as $error) {
								echo '<small class = "text-danger">' . $error . '</small><br>';
							}
						} else {
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
								echo '<small class = "text-danger">' . $error . '</small><br>';
							}
						} else {
							echo "";
						}
						?>
					</div>

					<div class="text-center w-50 border border-secondary rounded" id="formulario">
						<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn-warning" value="Crear cuenta">
					</div>
				</form>
			</div>
		</div>
	</main>


	<?php require_once 'footer.php';?>



	<!-- Optional JavaScript -->
	<?php require_once 'scripts.php'; ?>

</body>

</html>
