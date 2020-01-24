<?php
require_once("./BasesDeDatos/pdo.php");

class cliente{
  protected $IDUsuario;
  protected $username;
  protected $email;
  protected $pass;
  protected $avatar;
  protected $nombre;
  protected $apellido;
  protected $direccion;
  protected $id_ciudad;
  protected $telefono;
  protected $tipoCons;
  protected $rol = '2';
  const TABLA = 'usuario';

//
  public function setIDUsuario($IDUsuario){
    $this-> IDUsuario = $IDUsuario;
  }

  public function getIDUsuario(){
    return $this-> IDUsuario;
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

  public function __construct($IDUsuario, $username, $email, $pass, $rol, $avatar){
    $this -> IDUsuario = $IDUsuario;
    $this -> username = trim($username);
    $this -> email = trim($email);
    $this -> avatar = trim($avatar);
    $this -> pass = password_hash($pass, PASSWORD_DEFAULT);
    $this -> rol = $rol;
  }

  /*public function nuevoCliente(){
    $conexion = new Conexion();
    $clienteNuevo = $conexion -> prepare("INSERT INTO usuario(IDUsuario, username, email, avatar, pass, rol)
    VALUES(default, :username, :email, :avatar, :pass, :rol)");
    $consulta -> bindValue(':username', $username);
    $consulta -> bindValue(':email', $email);
    $consulta -> bindValue(':avatar', $avatar);
    $consulta -> bindValue(':pass', $pass);
    $consulta -> bindValue(':rol', $rol);
    $consulta -> execute();
    $this -> IDUsuario = $conexion -> lastInsertId();
  }*/

  //
  public function guardar(){
      $conexion = new Conexion();
      if($this->IDUsuario) /*Modifica*/ {
         $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET * WHERE id = :id');
         $consulta->bindValue(':nombre', $this->nombre);
         $consulta->bindValue(':descripcion', $this->descripcion);
         $consulta->bindValue(':id', $this->id);
         $consulta->execute();
      }else /*Inserta*/ {
         $consulta = $conexion -> prepare('INSERT INTO usuario(IDUsuario, username, email, avatar, pass, rol)
         VALUES (default, :username, :email, :avatar, :pass, :rol)');
         $consulta -> bindValue(':username', $username);
         $consulta -> bindValue(':email', $email);
         $consulta -> bindValue(':avatar', $avatar);
         $consulta -> bindValue(':pass', $pass);
         $consulta -> bindValue(':rol', $rol);
         $consulta -> execute();
         $this->IDUsuario = $conexion->lastInsertId();
      }
      $conexion = null;
   }
  //


  //
  public function guardar2(){
    try {
      $conectar = new Conexion();
      $agrego = "INSERT INTO usuario(IDUsuario, Username, Email, Pass, Rol, Avatar) VALUES (default, :username, :email, :pass, :rol, :avatar)";
      $consulta = $conectar -> prepare($agrego);
      $consulta -> bindValue(':username', $this -> username);
      $consulta -> bindValue(':email', $this -> email);
      $consulta -> bindValue(':avatar', $this -> avatar);
      $consulta -> bindValue(':pass', $this -> pass);
      $consulta -> bindValue(':rol', $this -> rol);
      $consulta -> execute();
      $this-> IDUsuario = $conectar -> lastInsertId();
    } catch (\Exception $e) {
      echo "Error: " . $e->GetMessage() . "<br>línea: " . $e->getLine();
    }


  }

   //

/*$conexion = new Conexion();
$consulta = $conexion -> prepare("INSERT INTO lupulus(IDUsuario, username, email, pass, rol, avatar)
VALUES (default, :username, :email, :pass, :rol, :avatar)");
$consulta -> bindValue(':username', $username);
$consulta -> bindValue(':email', $email);
$consulta -> bindValue(':avatar', $avatar);
$consulta -> bindValue(':pass', $pass);
$consulta -> bindValue(':rol', $rol);
$consulta -> execute();
$this-> IDUsuario = $conexion->lastInsertId();*/


}


?>
