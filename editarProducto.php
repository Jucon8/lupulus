<?php 

include("class/db.php");
session_start();

$titulo="Panel de Control";
$baseDeDatos = new DataBase('mysql:host=127.0.0.1;dbname=lupulus_beta;port=3306','root','');

if (isset($_POST['edit'])) {
  //MODIFICA EL PRODUCTO
    $baseDeDatos->modificarProducto($_GET['variable1'],'nombre', $_POST['nombre']);
    $baseDeDatos->modificarProducto($_GET['variable1'],'descripcion', $_POST['descripcion']);
    $baseDeDatos->modificarProducto($_GET['variable1'],'precio', $_POST['precio']);
    $baseDeDatos->modificarProducto($_GET['variable1'],'stock', $_POST['stock']);
    $baseDeDatos->modificarProducto($_GET['variable1'],'categoria_id', $_POST['categoria_id']);
    $baseDeDatos->modificarProducto($_GET['variable1'],'subcategoria_id', $_POST['subcategoria_id']);

    header('Location: admin.php#productos');
    exit;
}

//ARRAY CON LOS DATOS DE LOS PRODUCTOS
$datosProductos = $baseDeDatos->leerProductos();
$datosCategorias = $baseDeDatos->leerCategorias();
$datosSubcategorias = $baseDeDatos->leerSubcategorias();

foreach ($datosProductos as $producto) {
    if ($producto['id'] == $_GET['variable1']) {
        $id = $producto['id'];
        $nombre = $producto['nombre'];
        $descripcion = $producto['descripcion'];
        $precio = $producto['precio'];
        $stock = $producto['stock'];
        $categoria_id = $producto['categoria_id'];
        $subcategoria_id = $producto['subcategoria_id'];
    }
}

foreach ($datosCategorias as $categoria) {
    if ($categoria['id'] == $categoria_id) {
        $categoryID = $categoria['id'];
        $categoryName = $categoria['nombre'];
    }
}

foreach ($datosSubcategorias as $subcategoria) {
    if ($subcategoria['id'] == $subcategoria_id) {
        $subcategoryID = $subcategoria['id'];
        $subcategoryName = $subcategoria['nombre'];
    }
}



//echo $_GET['variable1'];

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <?php require_once 'head.php' ?>
</head>

<body>

          <div class="alta-producto">
            <h4>MODIFICAR PRODUCTO +/- </h4>
            <form method="post">
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationDefault01">Nombre</label>
        <input value="<?php echo $nombre ?>" name="nombre" type="text" class="form-control" id="validationDefault01" value="" required>
      </div>
      <div class="col-md-5 mb-3">
        <label for="validationDefault02">Precio</label>
        <input value="<?php echo $precio ?>" name="precio" type="text" class="form-control" id="validationDefault03" value="" placeholder="Ingrese un número decimal sin el signo $" required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationDefault03">Descripción</label>
        <input value="<?php echo $descripcion ?>" name="descripcion" type="text" class="form-control" id="validationDefault04" required> 
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault04">Categoria</label>
        <select name="categoria_id"  class="custom-select" id="validationDefault05" required>
        <option selected disable value=""><?php echo $categoryName ?></option>
          <option value='1'>EQUIPAMIENTO</option>
          <option value='2'>INSUMOS</option>
          <option value='3'>KIT</option>
        </select>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault04">Subcategoria</label>
        <select name="subcategoria_id" class="custom-select" id="validationDefault06" required>

       <!--Equipamiento-->
       <option selected disable value=""><?php echo $subcategoryName ?></option>
       <option disabled value="">Equipamiento ↓</option>
        <option value="1">Canillas y conectores</option>
        <option value="2">Embarrilado</option>
        <option value="3">Embotellado</option>
        <option value="4">Enfriado</option>
        <option value="5">Fermentación</option>
        <option value="6">Macerado y hervido</option>
        <option value="7">Mangueras</option>
        <option value="8">Medición y control</option>
        <option value="9">Molienda</option>
        <option value="10">Tratamiento agua</option>
        <!--Insumos-->
       <option disabled value="">Insumos ↓</option>
         <option value="11">Azucares</option>
         <option value="12">Botellas</option>
         <option value="13">Clarificantes</option>
         <option value="14">Correción agua</option>
         <option value="15">Levaduras</option>
         <option value="16">Limpieza</option>
         <option value="17">Lúpulus</option>
         <option value="18">Maltas</option>
         <option value="19">Tapas</option>
         <!--Kits-->
        <option disabled value="">Kits ↓</option>
          <option value="20">Kit equipos</option>
          <option value="21">Kit insumos</option>
        </select>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault05">Stock</label>
        <input value="<?php echo $stock ?>" name="stock" type="text" class="form-control" id="validationDefault07" placeholder="Cantidad" required>
      </div>
    </div>
    <button class="btn btn-success" type="submit" name="edit">GUARDAR CAMBIOS</button>
    <a href="admin.php#productos" class="btn btn-danger" role="button">CANCELAR</a>
  </form>
  </body>
</html>