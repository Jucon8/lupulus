<?php

/*FUNCION QUE UTILIZO MÁS ABAJO PARA ENCRIPTAR LA CONSTRASEÑA*/
function encriptar($textoPlano) {
  $hash = password_hash($textoPlano, PASSWORD_DEFAULT);
  return $hash;
}


/*VALIDACIÓN USUARIO, EMAIL, CONTRASEÑA*/
/*DECLARO LAS VARIABLES QUE RECIBIRÉ POR POST Y EL ARRAY DE USUARIOS*/
$newUser = "";
$newEmail = "";
$newPass = "";
$usuarios = [];

/*SI ES UN NOMBRE VALIDO LO GUARDO EN LA VARIABLE NEWUSER Y EN EL ARRAY*/
if($_POST) {
if (strlen($_POST["username"]) < 5) {
  echo "No se ingresó usuario o contiene menos de 5 caracteres.";
}else{
  echo "Usuario correcto";
  $newUser = $_POST["username"];
  $usuarios["nombre"] = $newUser;
}
}

echo "<br>";
/*SI ES UN CORREO VALIDO LO GUARDO EN SU VARIABLE Y EN EL ARRAY*/
if($_POST["email"] == "") {
echo "El campo de email está vacío.";
}else{
echo "El email es correcto.";
$newEmail = $_POST["email"];
$usuarios["correo"] = $newEmail;
}

echo "<br>";

/*SI LA CONTRASEÑA ES VALIDA LA ENCRIPTO, GUARDO EN SU VARIABLE Y EN EL ARRAY*/

if(strlen($_POST["password"]) == 0 || strlen($_POST["confirm-password"]) == 0){
  echo "No completó los campos de contraseña";
}elseif($_POST["password"] != $_POST["confirm-password"]){
    echo "Las contraseñas no se parecen";
  }else{
    echo "Contraseña correcta";
    $newPass = encriptar($_POST["password"]);
    echo "<br>";
    echo $newPass;
    $usuarios["contrasenia"] = $newPass;
  }

/*REGISTRACIÓN, AÑADIR USUARIO, EMAIL Y CONTRASEÑA ENCRIPTADA A JSON*/

echo "<br>";
var_dump($usuarios);
/*GUARDO EL ARRAY A JSON COMO usuarios.json*/
$json = json_encode($usuarios);
file_put_contents("usuarios.json", $json);


/*$archivos = file_get_contents("usuarios.json");

$usuarios = json_decode($archivos, true);

$usuarios = [
  "nombre" => "Oscar",
  "correo" => "oscar@gmail.com",
  "contrasenia" => "encriptado"
]

$jsonFinal = json_encode($usuarios);
file_put_contents("usuarios.json", $jsonFinal);*/

/*REDIRIGIR*/
 ?>
