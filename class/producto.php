<?php 
class Producto {
private $IDProducto;
private $nombre;
private $descripcion;
private $precio;
private $stock;
private $estado;
private $imagen;
private $categoria;
private $subcategoria;


public function getIDProducto() {
    return $this->IDProducto;
}

public function setIDProducto($IDProducto) {
    $this->IDProducto = $IDProducto;
}

public function getNombre() {
    return $this->nombre;
}

public function setNombre($nombre) {
    $this->nombre = $nombre;
}
public function getDescripcion() {
    return $this->descripcion;
}

public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
}
public function getPrecio() {
    return $this->precio;
}

public function setPrecio($precio) {
    $this->precio = $precio;
}
public function getStock() {
    return $this->stock;
}

public function setStock($stock) {
    $this->stock = $stock;
}

public function altaProducto() {

}

public function bajaProducto() {

}

public function modificarProducto() {

}

public function añadirAlCarrito() {

}

public function quitarDelCarrito() {

}

public function getImagen() {
    return $this->imagen;
}

public function setImagen($imagen) {
    $this->imagen = $imagen;
}

public function getCategoria() {
    return $this->categoria;
}

public function setCategoria($categoria) {
    $this->categoria = $categoria;
}

public function getSubcategoria() {
    return $this->subcategoria;
}

public function setSubcategoria($subcategoria) {
    $this->subcategoria = $subcategoria;
}


}


?>