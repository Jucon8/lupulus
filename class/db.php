<?php
//CLASE PARA CREAR EL OBJETO DE NUESTRA BASE DE DATOS
class DataBase {
private $dsn;
private $db_user;
private $db_pass;
public  $conexion;

public function __construct($dsn, $db_user, $db_pass) {
  try {
      $this->conexion = new PDO ($this->dns = $dsn, $this->db_user = $db_user, $this->db_pass = $db_pass);
      $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch (\Exception $e){
      var_dump ($e->getMessage());
      echo "Oh no, hubo un error!";exit;
  } 
}

//FUNCIÓN PARA INSERTAR PRODUCTOS A LA BASE DE DATOS
public function insertarProducto($nombre, $stock, $precio, $descripcion, $id_subcategoria) {
    $precio_double = floatval($precio);
    $stock_int = (INT)$stock;
    $id_int = (INT)$id_subcategoria;
    $consulta = $this->conexion->prepare("INSERT INTO producto (IDProducto, Nombre, Stock, Precio, Descripción, IDSubcategoria)
    VALUES ( NULL, '$nombre', '$stock_int', '$precio_double', '$descripcion', '$id_int')");
    $consulta->execute();
}

/*public function leerProducto(){
    $consulta = $this->conexion->prepare('SELECT * from producto');
    $consulta->execute();

    $arrayResult = $consulta->fetchAll(PDO::FETCH_ASSOC);
}*/

}





?>
