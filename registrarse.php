<?php 

$errores = [];  
if ($_POST) {
    // Validamos el input nombre :
  if (isset($_POST["username"])) {
    if (empty($_POST["username"])) {
      $errores["username"][] = "* Por favor ingrese su usuario";
      
    }
    if (strlen($_POST["username"]) < 3) {
      $errores["username"][] = "* El usuario debe ser mayor a 3 caracteres";  
      
    }  
  }

  // Validamos el input e-mail :
  if (isset($_POST["email"])) {
    if (empty($_POST["email"])) {
      $errores["email"][] = "* Ingrese su email";
      
    }
    if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
      $errores["email"][] = "* El e-mail ingresado no es valido";
        
    }  
  }

  // Validamos el input password :
  if (isset($_POST["password"])) {
    if (empty($_POST["password"])) {
      $errores["password"][] = "* Ingrese una contraseña";
      }
    if (strlen($_POST["password"])< 5) {
      $errores["password"][] = "* La contraseña debe ser mayor a 6 caracteres" ;
        
    }  
  }
  // Validamos la confirmacion del password :
  if (isset($_POST["confirm-password"])) {
    if (empty($_POST["confirm-password"])) {
      $errores["confirm-password"][] = "* Re-ingrese su contraseña";
      
    }
    if ($_POST["confirm-password"] != $_POST["password"])  {
      $errores["confirm-password"][] = "* Las contraseñas no coinciden ";
        
    }  
  }
    //Registracion de usuario
    if (count($errores) == 0) {
      $usuarioParaGuardar = [
        "nombre" => trim($_POST['username']),
        "email" => trim($_POST['email']),
        "password" => password_hash ($_POST['password'], PASSWORD_DEFAULT)
      ];
      $archivos = file_get_contents ("usuarios.json");
      $arrayUsuarios=json_decode($archivos, true);
      $arrayUsuarios[]=$usuarioParaGuardar ;
      $usuariosFinal = json_encode($arrayUsuarios);
      file_put_contents("usuarios.json", $usuariosFinal );
      
    }
}
//Persistencia
function persistirDato ($dato, $arrayDeErrores) {
  if (isset($arrayDeErrores[$dato])){
    return "";
  } else {
      if (isset($_POST[$dato])) {
        return $_POST [$dato];

 }
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
<div class="container-fluid loginimg pt-5" id ="formularioGeneral">

<div class="col-sm-9 col-md-6 col-lg-5 rounded bg-white pt-1 pb-3" id="formulario">
  <div class="text-center">
    <h2 class="p-3">Registrarse</h2>
  </div>
  <form class="container col-md-9 col-lg-12" id="register-form" action="" method="post" role="form">
    <div class="form-group">
        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="<?= persistirDato("username",$errores) ?>">
      <!--Validamos el input username  -->
      <?php 
      if (isset($errores["username"])) {
        foreach ($errores["username"] as $error) {
          echo '<small class = "text-danger">'.$error.'</small><br>';
        } 
      }else {
        echo "";
      }                      
      ?>
    </div>
    <div class="form-group">
        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo electronico" value="<?= persistirDato("email",$errores) ?>">
        <!--Validamos el input email  -->
        <?php 
          if (isset($errores["email"])) {
            foreach ($errores["email"] as $error) {
              echo '<small class = "text-danger">'.$error.'</small><br>';
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
          if (isset($errores["password"])) {
            foreach ($errores["password"] as $error) {
              echo '<small class = "text-danger">'.$error.'</small><br>';
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
          if (isset($errores["confirm-password"])) {
            foreach ($errores["confirm-password"] as $error) {
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
    <?php require_once 'footer.php' ?>
  </footer>

  <!-- Optional JavaScript -->
  <?php require_once 'scripts.php' ?>

</body>

</html>