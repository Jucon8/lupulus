<?php
function ValidarTodo(){
  $errores = [];
  // Validacion de Nombre //
  if (isset($_POST["nombre"])) {
    if (empty($_POST["nombre"])) {
      $errores["nombre"][] = "Ingrese su nombre";
    }
    if (strlen($_POST["nombre"])<6) {
      $errores["nombre"][] = "* El nombre debe contener al menos 6 caracteres";
    }
  }
  //Validación de Email //
  if (isset($_POST["email"])) {
    if (empty($_POST["email"])) {
      $errores["email"][] = "* Ingrese un e-mail";
    }
    if (!filter_var($_POST["email"],  FILTER_VALIDATE_EMAIL)) {
      $errores["email"][] = "* Ingrese un e-mail válido";
    }
  }
  // Validación de Contraseña //
  if (isset($_POST["password"])) {
    if (empty($_POST["password"])) {
      $errores["password"][] = "* Ingrese una contraseña";
    }
    if (strlen($_POST["password"])<=6) {
      $errores["password"][] = "La contraseña debe tener al menos 6 caracteres";
    }
  }
  // Validación de Confirmar Contraseña //
  if (isset($_POST["confirmar"])) {
    if (empty($_POST["confirmar"])) {
      $errores["confirmar"][] = "Re-ingrese su contraseña";
    }
    if ($_POST["confirmar"] != $_POST["password"]) {
      $errores["confirmar"][] = "Las contraseñas no coinciden";
    }
  }
  return $errores;
}
// Persistencia de Datos //
function PersistirDatos($dato, $arrayDeErrores){
  if (isset($arrayDeErrores[$dato])) {
    echo "";
  } else {
    if (isset($_POST[$dato])) {
      return $_POST[$dato];
    }
  }
}
 ?>