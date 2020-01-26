<?php
require_once("./BasesDeDatos/pdo.php");

class provincia{
  protected $id;
  protected $nombre;
  const TABLA = 'provincia';

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

  public function __construct($id, $nombre){
    $this -> id = $id;
    $this -> nombre = trim($nombre);
  }

  public function guardar(){
     $conexion = new Conexion();
     $consulta = $conexion->prepare('INSERT INTO provincia(nombre)
     VALUES(:nombre)');
     $consulta->bindValue(':nombre', $this->nombre);
     $consulta->execute();
     }


  public function buscarProvincia(){
    $conexion = new Conexion();
    $query = $conexion->prepare("SELECT * FROM provincia");
    $query->execute();
    $provincias = $query->fetchAll(PDO::FETCH_ASSOC);
    return $provincias;
  }

  public function asociarProvincia_Ciudad(){
    $conexion = new Conexion();
    $SQL = 'SELECT ciudad.*, provincia.id
    FROM provincia
    INNER JOIN ciudad ON provincia_id = provincia.id';
    $query = $conexion->prepare($SQL);
    $query->execute();
    $ciudades = $query->fetchAll(PDO::FETCH_ASSOC);
    return $ciudades;
  }

}


?>
