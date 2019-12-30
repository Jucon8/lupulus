<?php

function ValidarTodo(){

  // Validacion de Nombre //
  if (isset($_POST["username"])) {
    if (empty($_POST["username"])) {
      $errores["username"][] = "* Ingrese un nombre";
    }
    if (strlen($_POST["username"])<3) {
      $errores["username"][] = "* El nombre debe ser mayor a 3 caracteres";
    }
  }

  // Validacion de Apellido //
  if (isset($_POST["apellido"])) {
    if (empty($_POST["apellido"])) {
      $errores["apellido"][] = "* Ingrese su apellido";
    }
    if (strlen($_POST["apellido"])<6) {
      $errores["apellido"][] = "* El apellido debe contener al menos 6 caracteres";
    }
  }

  // Validacion de Teléfono //
  if (isset($_POST["telefono"])) {
    if (empty($_POST["telefono"])) {
      $errores["telefono"][] = "* Ingrese su teléfono";
    }
    if (strlen($_POST["telefono"]) < 10){
      $errores["telefono"][] = "* El teléfono debe contener 10 caracteres";
    }
  }

  // Validacion de Ciudad //
  if (isset($_POST["ciudad"])) {
    if (empty($_POST["ciudad"])) {
      $errores["ciudad"][] = "* Ingrese su Ciudad";
    }
    if (strlen($_POST["ciudad"])<5) {
      $errores["ciudad"][] = "* La Ciudad debe contener al menos 5 caracteres";
    }
  }

  // Validacion de Dirección //
  if (isset($_POST["direccion"])) {
    if (empty($_POST["direccion"])) {
      $errores["direccion"][] = "* Ingrese su dirección";
    }
    if (strlen($_POST["direccion"])<6) {
      $errores["direccion"][] = "* La direccion debe contener al menos 6 caracteres";
    }
  }

  //Validación de Email //
  if (isset($_POST["email"])) {
    if (empty($_POST["email"])) {
      $errores["email"][] = "* Ingrese su email";
    }
    if (!filter_var($_POST["email"],  FILTER_VALIDATE_EMAIL)) {
      $errores["email"][] = "* El e-mail ingresado no es valido";
    }
  }

  // Validación de Contraseña //
  if (isset($_POST["password"])) {
    if (empty($_POST["password"])) {
      $errores["password"][] = "* Ingrese una contraseña";
    }
    if (strlen($_POST["password"])<5) {
      $errores["password"][] = "* La contraseña debe tener al menos 6 caracteres";
    }
  }

  // Validación de Confirmar Contraseña //
	if (isset($_POST["confirm-password"])) {
		if (empty($_POST["confirm-password"])) {
			$errores["confirm-password"][] = "* Re-ingrese su contraseña";
		}
		if ($_POST["confirm-password"] != $_POST["password"]) {
			$errores["confirm-password"][] = "* Las contraseñas no coinciden";
		}
  }

  return $errores;
}

function validarAvatar(){  
if (isset($_FILES["avatar"])) {
    $estosBytes = 1000000;
    if ($tamano = $_FILES["avatar"]["size"] > $estosBytes) {
      $errores["avatar"][]= "* Se permiten archivos de 1 MB máximo.";
  }
  $nombreAvatar = $_FILES["avatar"]["name"];
  $extension = pathinfo($nombreAvatar, PATHINFO_EXTENSION);
  $extension = strtolower($extension);
  //compruebo si las características del archivo son las que deseo
    if ($extension != "jpg" && $extension != "jpeg" && $extension != "png") {
      //si no se cumplen que imprima el siguiente mensaje:
      $errores["avatar"][]= "* Se permiten archivos .png, .jpeg o .jpg <br>";
    }
  } 
  return $errores;
}


// Persistencia de Datos //
function persistirDatos($dato, $arrayDeErrores){
  if (isset($arrayDeErrores[$dato])) {
    return "";
  } else {
    if (isset($_POST[$dato])) {
      return $_POST[$dato];
    }
  }
}
 ?>
