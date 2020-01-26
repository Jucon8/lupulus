<?php
session_start();

require_once("controladores/validaciones.php");
require_once("./class/class-cliente.php");
require_once("./class/class-usuario.php");

$titulo = "Iniciar Sesión";

require_once 'controladores/validaciones.php';

$erroresLogin = [];

if ($_POST) {

  $erroresLogin = ValidarTodo();
  if (count($erroresLogin) == 0) {

    // Logue de Usuario //
  $email = $_POST["email"];
  $pass = $_POST["password"];

  $usuarioRegistrado = cliente:: loguearse($email, $pass);
  var_dump($usuarioRegistrado);

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
      if ($_SESSION['rol_id']=='2') {
        header("Location: shop.php");
      } elseif ($_SESSION['rol_id']=='1') {
        header("Location: admin.php");
      }
    } else {
      header("Location: iniciarsesion.php?error=1");
      $error[] = 'email o contraseña incorrectas';
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
    <div class="col-sm-9 col-md-6 col-lg-5 rounded pt-1 pb-3" id="formulario">
      <div class="text-center">
        <h2 class="p-3">Conectarse</h2>

        <?php
         if(isset($error)):?>
           <ul class="alert alert-danger">
             <?php
             foreach ($error as $value) :?>
               <li> <?=$value;?> </li>
               <?php endforeach;?>
           </ul>
         <?php endif;?>


      </div>

      <form class="container col-md-9 col-lg-12" method="POST" action="" id="login-form">
        <div class="form-group">
          <label for="email"></label>
          <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" value="<?= persistirDatos('email', $erroresLogin) ?>">
          <?php
          if (isset($erroresLogin['email'])) {
            foreach ($erroresLogin['email'] as  $value) {
              echo "<small class='text-danger'>" . $value . "</small><br>";
            }
          } ?>
        </div>
        <div class="form-group">
          <label for="password"></label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
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
          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="col-lg-6 form-control btn btn-login btn-warning" value="Login">
        </div>
        <div class="text-center">
        <a href="recuperar.php" class="btn btn-warning" > Olvide mi contraseña </a>
        </div>
        <br>

      </form>
    </div>
  </div>


  <footer>
    <?php require_once 'footer.php';?>
  </footer>

  <!-- Optional JavaScript -->
  <?php require_once 'scripts.php' ?>

</body>
