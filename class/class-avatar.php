<?php
require_once("./BasesDeDatos/pdo.php");
require_once("./class/class-cliente.php");


class avatar extends cliente{
  protected $avatar;


  public function eliminarAvatar(){
      $conexion = new Conexion();
      $consulta = $conexion->prepare('UPDATE usuario SET avatar = "" WHERE id = :id');
      $consulta->execute();
    }

}


?>
