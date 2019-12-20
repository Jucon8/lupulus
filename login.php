<?php
/*ASIGNO A LA VARIABLE USER Y PASS LOS DATOS QUE VIENEN POR POST*/
$user = $_POST["username"];
$pass = $_POST["password"];

/*LEO EL ARCHIVO JSON Y LO TRANSFORMO A ARRAY*/
$archivos = file_get_contents("usuarios.json");

$usuarios = json_decode($archivos, true);

$nombreUsuarios = [];

/*GENERA ARRAY CON LOS NOMBRES DE USUARIOS DEL JSON*/
foreach ($usuarios as $clave => $valor) {
  if ($clave == "nombre"){
    array_push($nombreUsuarios, $valor);
  }
}
/*LOGEA SI EXISTE EL NOMBRE EN EL ARRAY*/
foreach ($nombreUsuarios as $nombre) {
  if ($nombre == $user){
    session_start();
    $_SESSION["usuarioLogueado"] = $user;
    echo "Bienvenido";
  }else{
    echo "No existe el nombre de usuario, por favor registrate.";
  }
}




/*foreach ($usuarios as $categoria => $valor) {
  if($categoria == "nombre"){
    if($valor == $user){
      session_start();
      $_SESSION["usuarioLogueado"] = $user;
    }else{
      echo "No existe el nombre de usuario, por favor registrate.";
    }
  }
}*/

 ?>
