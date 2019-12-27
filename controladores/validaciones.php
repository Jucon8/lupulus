<?php
function ValidarTodo(){
  $errores = [];
  // Validacion de Nombre //
  if (isset($_POST["nombre"])) {
    if (empty($_POST["nombre"])) {
      $errores["nombre"][] = "El campo nombre está vacio";
    }
    if (strlen($_POST["nombre"])<6) {
      $errores["nombre"][] = "El nombre debe contener al menos 6 caracteres";
    }
  }
  //Validación de Email //
  if (isset($_POST["email"])) {
    if (empty($_POST["email"])) {
      $errores["email"][] = "El campo email está vacio";
    }
    if (!filter_var($_POST["email"],  FILTER_VALIDATE_EMAIL)) {
      $errores["email"][] = "La dirección de email no tiene un formato válido";
    }
  }
  // Validación de Contraseña //
  if (isset($_POST["password"])) {
    if (empty($_POST["password"])) {
      $errores["password"][] = "El campo contraseña está vacio";
    }
    if (strlen($_POST["password"])<4) {
      $errores["password"][] = "La contraseña debe tener al menos 4 caracteres";
    }
  }
  // Validación de Confirmar Contraseña //
  if (isset($_POST["confirmar"])) {
    if (empty($_POST["confirmar"])) {
      $errores["confirmar"][] = "El campo confirmar contraseña está vacio";
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