<?php
require_once("./BasesDeDatos/pdo.php");

abstract class usuario{
  protected $email;
  protected $pass;
  const TABLA = 'usuario';

  public function __construct($email, $pass){
    $this -> email = trim($email);
    $this -> pass = password_hash($pass, PASSWORD_DEFAULT);
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
