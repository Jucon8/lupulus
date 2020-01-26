<?php
require_once("./BasesDeDatos/pdo.php");

class tipoCons{
  protected $id;
  protected $nombre;
  const TABLA = 'usuario';

//
  public function setId($id){
    $this-> id = $id;
  }

  public function getId(){
    return $this-> id;
  }

  public function setNombre($nombre){
    $this-> nombre = $nombre;
  }

  public function getNombre(){
    return $this-> nombre;
  }

  public function buscarTipoCons(){
    $conexion = new Conexion();
    $query = $conexion->prepare("SELECT id, nombre FROM tipoCons");
    $query->execute();
    $tipoConsumidor = $query->fetchAll(PDO::FETCH_ASSOC);
    return $tipoConsumidor;
  }

}


?>
