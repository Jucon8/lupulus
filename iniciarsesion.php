<?php

require_once 'controladores/validaciones.php';
$erroresLogin = [];
if ($_POST) {
  $erroresLogin = validarFormulario();
  if (count($erroresLogin) == 0) {
    $usuarioGuardado = [
      //

    ];
    $usuarioRegistrado = json_decode("UsuarioRegistro.json");
    header('Location: bienvenido.php');
    exit;
  }
}
?>



<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <?php require_once 'head.php' ?>
  <title>Iniciar Sesión</title>
</head>

<body>


  <!--Inicio header-->
  <?php require_once 'header.php' ?>

  <!--Inicio de LOGIN -->
  <div class="container-fluid loginimg" id="formularioGeneral">

    <div class="col-sm-9 col-md-6 col-lg-5 rounded bg-white pt-1 pb-3" id="formulario">
      <div class="text-center">
        <h2 class="p-3">iniciar sesión</h2>
      </div>
      <form class="container col-md-9 col-lg-12" method="POST" action="" id="login-form">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre-registro" class="form-control" placeholder="Usuario" value="<?= persistirDatos('nombre', $erroresLogin) ?>">
          <?php
          if (isset($erroresLogin['nombre'])) {
            foreach ($erroresLogin['nombre'] as  $value) {
              echo "<small class='text-danger'>" . $value . "</small><br>";
            }
          } ?>
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" name="password" id="password-registro" class="form-control" placeholder="Contraseña">
          <?php
          if (isset($erroresLogin['password'])) {
            foreach ($erroresLogin['password'] as  $value) {
              echo "<small class='text-danger'>" . $value . "</small><br>";
            }
          } ?>
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


  <footer>
    <?php require_once 'footer.php' ?>
  </footer>

  <!-- Optional JavaScript -->
  <?php require_once 'scripts.php' ?>

</body>