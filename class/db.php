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
public function insertarProducto($nombre, $descripcion, $precio, $stock, $categoria_id, $subcategoria_id) {
   /* $precio_double = floatval($precio);
    $stock_int = (INT)$stock;
    $id_int = (INT)$categoria_id;*/
    $consulta = $this->conexion->prepare("INSERT INTO producto (nombre, descripcion, precio, stock, categoria_id, subcategoria_id, estado)
    VALUES ('$nombre', '$descripcion', '$precio', '$stock', '$categoria_id', '$subcategoria_id', 1)");
    $consulta->execute();
}

public function modificarProducto($id, $campo, $valor) {
    $consulta = $this->conexion->prepare("UPDATE producto 
    SET $campo = '$valor'
    WHERE id = $id");
    $consulta->execute();
}


public function leerProductos(){
    $consulta = $this->conexion->prepare('SELECT * from producto');
    $consulta->execute();

return $arrayResult = $consulta->fetchAll(PDO::FETCH_ASSOC); 
}

public function leerCategorias(){
    $consulta = $this->conexion->prepare('SELECT * from categoria');
    $consulta->execute();

return $arrayResult = $consulta->fetchAll(PDO::FETCH_ASSOC); 
}

public function leerSubcategorias(){
    $consulta = $this->conexion->prepare('SELECT * from subcategoria');
    $consulta->execute();

return $arrayResult = $consulta->fetchAll(PDO::FETCH_ASSOC); 
}



/*public function leerProducto(){
    $consulta = $this->conexion->prepare('SELECT * from producto');
    $consulta->execute();

    $arrayResult = $consulta->fetchAll(PDO::FETCH_ASSOC);
}*/

}


?>