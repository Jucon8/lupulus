<?php

require_once 'controladores/validaciones.php';
$errores = [];
if ($_POST) {
  $errores = validarFormulario();

  if (count($errores) == 0) {
    $usuarioGuardado = [
      "nombre" => trim($_POST["nombre"]),
      "email" => trim($_POST["email"]),
      "password" => password_hash($_POST["password"], PASSWORD_DEFAULT)

    ];
    $jason = json_encode($usuarioGuardado);
    file_put_contents("UsuarioRegistro.json", $jason .  PHP_EOL, FILE_APPEND);
    header("Location: index.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <?php require_once 'head.php' ?>
  <title>Registrarse</title>
</head>

<body>
  <!--Inicio header-->
  <?php require_once 'header.php' ?>

  <!--Inicio de REGISTRARSE -->
  <div class="container-fluid loginimg " id="formularioGeneral">
    <div class="col-sm-9 col-md-6 col-lg-5 rounded bg-white pt-1 pb-3" id="formulario">
      <div class="text-center">
        <h2 class="p-3">registrarse</h2>
      </div>
      <form method="post" action="">

        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre-registro" class="form-control" placeholder="Usuario" value="<?= persistirDatos('nombre', $errores) ?>">
          <?php
          if (isset($errores['nombre'])) {
            foreach ($errores['nombre'] as  $value) {
              echo "<small class='text-danger'>" . $value . "</small><br>";
            }
          } ?>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Correo electronico" value="<?= persistirDatos('email', $errores) ?>">
          <?php
          if (isset($errores['email'])) {
            foreach ($errores['email'] as  $value) {
              echo "<small class='text-danger'>" . $value . "</small><br>";
            }
          } ?>
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" name="password" id="password-registro" class="form-control" placeholder="Contraseña">
          <?php
          if (isset($errores['password'])) {
            foreach ($errores['password'] as  $value) {
              echo "<small class='text-danger'>" . $value . "</small><br>";
            }
          } ?>
        </div>
        <div class="form-group">
          <label for="confirm-password">Repetir contraseña</label>
          <input type="password" class="form-control" id="repassword" name="confirm-password">
          <?php
          if (isset($errores['confirm-password'])) {
            foreach ($errores['confirm-password'] as $value) {
              echo "<small class='text-danger'>" . $value . "</small><br>";
            }
          } ?>
        </div>
        <div class="botonRegistro">
          <button type="submit" class="btn btn-primary">Registrarse</button>
        </div>

      </form>
    </div>
  </div>

  <footer>
    <?php require_once 'footer.php' ?>
  </footer>

  <!-- Optional JavaScript -->
  <?php require_once 'scripts.php' ?>

</body>

</html>