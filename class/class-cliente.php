<?php
require_once("./BasesDeDatos/pdo.php");
require_once("./class/class-usuario.php");
require_once("./class/class-provincia.php");

class cliente extends usuario{
  protected $id;
  protected $username;
  protected $email;
  protected $pass;
  protected $avatar;
  protected $nombre;
  protected $apellido;
  protected $direccion;
  protected $ciudad;
  protected $provincia;
  protected $telefono;
  protected $tipoConsumidor;
  protected $rol_id;
  const TABLA = 'usuario';

//
  public function setId($id){
    $this-> id = $id;
  }

  public function getId(){
    return $this-> id;
  }

  public function setUsername($username){
    $this-> username = $username;
  }

  public function getUsername(){
    return $this-> username;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function getEmail(){
    return $this-> email;
  }

  public function setPass($pass){
    $this-> pass = $pass;
  }

  public function getPass(){
    return $this-> pass;
  }
//
  public function setNombre($nombre){
    $this-> nombre = $nombre;
  }

  public function getNombre(){
    return $this-> nombre;
  }

  public function setApellido($apellido){
    $this-> apellido = $apellido;
  }

  public function getApellido(){
    return $this-> apellido;
  }

  public function setDireccion($direccion){
    $this-> direccion = $direccion;
  }

  public function getDireccion(){
    return $this-> direccion;
  }

  public function setTelefono($telefono){
    $this-> telefono = $telefono;
  }

  public function getTelefono(){
    return $this-> telefono;
  }

  public function setProvincia($provincia){
    $this-> provincia = $provincia;
  }

  public function getProvincia(){
    return $this-> provincia;
  }

  public function setCiudad($ciudad){
    $this-> ciudad = $ciudad;
  }

  public function getCiudad(){
    return $this-> ciudad;
  }

  public function setTipoConsumidor($tipoConsumidor){
    $this-> tipoConsumidor = $tipoConsumidor;
  }

  public function getTipoConsumidor(){
    return $this-> tipoConsumidor;
  }

  public function __construct($id, $username, $email, $pass, $rol_id, $avatar){
    $this -> id = $id;
    $this -> username = trim($username);
    $this -> email = trim($email);
    $this -> avatar = trim($avatar);
    $this -> pass = password_hash($pass, PASSWORD_DEFAULT);
    $this -> rol_id = ($rol_id= '2');
  }


public function guardar(){
   $conexion = new Conexion();
   $consulta = $conexion->prepare('INSERT INTO usuario(id, username, email, avatar, pass, rol_id)
   VALUES(:id, :username, :email, :avatar, :pass, :rol_id)');
   $consulta->bindValue(':id', $this->id);
   $consulta->bindValue(':username', $this->username);
   $consulta->bindValue(':email', $this->email);
   $consulta->bindValue(':avatar', $this->avatar);
   $consulta->bindValue(':pass', $this->pass);
   $consulta->bindValue(':rol_id', $this->rol_id);
   $consulta->execute();
   $this->id = $conexion->lastInsertId();
   }

  public function editDatos($id, $nombre, $apellido, $telefono, $direccion, $provincia, $ciudad, $tipoConsumidor,$avatar){
      $conexion = new Conexion();
      $consulta = $conexion->prepare('UPDATE usuario SET nombre = :nombre, apellido = :apellido,
      direccion = :direccion, ciudad = :ciudad, provincia = :provincia, telefono = :telefono,
      tipoCons = :tipoConsumidor, avatar = :avatar WHERE id = :id');
      $consulta->bindValue(':id', $id);
      $consulta->bindValue(':avatar', $avatar);
      $consulta->bindValue(':nombre', $nombre);
      $consulta->bindValue(':apellido', $apellido);
      $consulta->bindValue(':telefono', $telefono);
      $consulta->bindValue(':direccion', $direccion);
      $consulta->bindValue(':provincia', $provincia);
      $consulta->bindValue(':ciudad', $ciudad);
      $consulta->bindValue(':tipoConsumidor', $tipoConsumidor);
      $consulta->execute();

    }

    public function loguearse($email, $pass){
      try {
        $conectar = new Conexion();
        $consulta = $conectar -> prepare('SELECT * FROM usuario WHERE email=:email');
        $consulta -> bindValue(':email', $email);
        $consulta -> execute();
        $usuarios = $consulta -> fetch(PDO::FETCH_ASSOC);
        return $usuarios;
      } catch (\Exception $e) {
        echo "Error: " . $e->GetMessage() . "<br>línea: " . $e->getLine();
      }
  }

  public function getDatos($email){
    try {
      $conectar = new Conexion();
      $consulta = $conectar -> prepare('SELECT * FROM usuario WHERE email=:email');
      $consulta -> bindValue(':email', $email);
      $consulta -> execute();
      $datos = $consulta -> fetchAll(PDO::FETCH_ASSOC);
      return $datos;
    } catch (\Exception $e) {
      echo "Error: " . $e->GetMessage() . "<br>línea: " . $e->getLine();
    }
}



}


?>
