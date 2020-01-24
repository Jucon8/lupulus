<?php
require_once("./BasesDeDatos/pdo.php");

class usuario{
  protected $IDUsuario;
  protected $username;
  protected $email;
  protected $pass;
  protected $avatar;
  const TABLA = 'usuario';

  public function __construct($IDUsuario = null, $username, $email, $avatar, $pass){
    $this -> id = $id;
    $this -> username = trim($username);
    $this -> email = trim($email);
    $this -> avatar = trim($avatar);
    $this -> pass = password_hash($pass, PASSWORD_DEFAULT);
  }

  public function setIDUsuario($IDUsuario){
    $this-> IDUsuario = $IDUsuario;
  }

  public function getIDUsuario(){
    return $this-> $IDUsuario;
  }

  public function setUsername($username){
    $this-> username = $username;
  }

  public function getUsername(){
    return $this-> $username;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function getEmail(){
    return $this-> $email;
  }

  public function setPassword($password){
    $this-> password = $password;
  }

  public function getPassword(){
    return $this-> $password;
  }

}


?>
