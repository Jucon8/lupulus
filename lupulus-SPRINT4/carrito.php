<?php
session_start();
/*session_destroy();*/
require 'BasesDeDatos/pdo.php';
 $conexion = new Conexion();
$titulo="Carrito";


if(isset($_SESSION['carrito'])){
//si existe
    if(isset($_GET['id'])){
      $arreglo =$_SESSION['carrito'];
      $encontro = false;
      $numero =0;
      for($i=0;$i<count($arreglo);$i++){
        if($arreglo[$i]['Id']== $_GET['id']){
          $encontro =true;
          $numero=$i;
        }
      }
        if ($encontro==true) {
          $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
          $_SESSION['carrito']=$arreglo;
        }else {
          ///no esta el regisro
              $nombre ="";
              $precio="";
              $imagen="";
              $consulta=$conexion ->prepare('SELECT * FROM producto where id='.$_GET['id'])or die($conexion->error) ;
              $consulta ->execute();
              $fila=$consulta->fetch(PDO::FETCH_ASSOC);
              $nombre =$fila['nombre'];
              $precio=$fila['precio'];
              if (!empty($fila['imagen'])) {
                $imagen=$fila['imagen'];
              } else {
                $imagen = 'cartel.jpg';
              }
              $arregloNuevo=[
                  'Id' => $_GET['id'],
                  'Nombre' => $nombre,
                  'Precio' => $precio,
                  'Imagen' => $imagen,
                  'Cantidad' => $cantidad

              ];
              array_push($arreglo,$arregloNuevo);
              $_SESSION['carrito']=$arreglo;
            }
          }
}else {
  //creamos la variable de sesion
  if(isset($_GET['id'])){
      $consulta=$conexion ->prepare('SELECT * FROM producto where id='.$_GET['id']);
      $consulta ->execute();
      $fila=$consulta->fetch(PDO::FETCH_ASSOC);
      $nombre =$fila['nombre'];
      $precio=$fila['precio'];
      if (!empty($fila['imagen'])) {
        $imagen=$fila['imagen'];
      } else {
        $imagen = 'cartel.jpg';
      }
      $arreglo[]=array(
          'Id' => $_GET['id'],
          'Nombre' => $nombre,
          'Precio' => $precio,
          'Imagen' => $imagen,
          'Cantidad' => $cantidad
      );
    $_SESSION['carrito']=$arreglo;
  }
}

//vaciar carito
if ( isset($_GET['reset']) )
{
if ($_GET["reset"] == 'true')
  {
  unset($_SESSION["carrito"]); //Which item has been chosen
  }
}

//Delete

if (isset($_GET["delete"])){
    $i = $_GET["delete"];
    $_SESSION['carrito'][$i];
    unset($_SESSION['carrito'][$i]);
}


/*$self = $_SERVER['PHP_SELF'];
if($self != 'carrito.php') {
  header("refresh:1; url='carrito.php'"); //Refrescamos cada 300 segundos
}*/



?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <?php require_once 'head.php' ?>

</head>
<body>
  <!--Inicio header-->
  <?php require_once 'header.php' ?>

  <!-- inicio carrito-->

    <div class="carrito-section">
      <br>
      <br>
      <div class="container-fluid rounded" id="carrito">
        <div class="row mb-5">
          <form class="col-lg-12" method="post">
            <div class="table-responsive">
              <br>
                <table class="table table-bordered" id="tabla-carrito">
                <thead>
                  <tr>
                    <th scope="col" class="product-imagen d-none d-sm-none d-md-block">
                      <div class="p-2 px-3 text-uppercase">Imagen</div>
                  </th>
                    <th scope="col" class="product-nombre">
                      <div class="p-2 px-3 text-uppercase">Producto</div>
                      </th>
                    <th scope="col" class="product-precio">
                      <div class="py-2 text-uppercase text-center">Precio</div>
                      </th>
                    <th scope="col" class="product-cantidad">
                        <div class="py-2 text-uppercase">Cantidad</div>
                      </th>
                    <th class="product-subtotal">
                      <div class="py-2 text-uppercase">SubTotal</div>
                    <!--</th>
                    <th class="product-remover">
                      <div class="py-2 text-uppercase">Eliminar</div>
                    </th>
                  </tr>-->
                </thead>
                <tbody>

                  <?php
                  $total =0;
                if(isset($_SESSION['carrito'])){
                        $arregloCarrito =$_SESSION['carrito'];
                        for($i=0;$i<count($arregloCarrito);$i++){
                          $total = $total + ($arregloCarrito[$i]['Precio'] * $arregloCarrito[$i]['Cantidad']);
                           
                  ?>
                    <tr class="tabla-principal">
                      <td class="product-imagen">
                      <!-- FALTA HACER IMAGEN -->

                        <img src="img/<?php if(!empty($arregloCarrito["imagen"])){echo $arregloCarrito["imagen"];}
                      else {echo 'cartel.jpg';}?>" class="card-img" alt="...">

                      </td>
                      <td class="product-nombre">
                        <h2 class=" text-center"><?= $arregloCarrito[$i]['Nombre'];?></h2>
                      </td>
                      <td>$<?= $arregloCarrito[$i]['Precio'] ;?></td>
                      <td>
                        <div class="input-group mb-3" style="max-width: 120px;">

                          <input type="text" class="form-control text-center txtCantidad "
                           data-precio=<?= $arregloCarrito[$i]['Precio'] ;?>
                           data-id=<?= $arregloCarrito[$i]['Id'] ;?>
                           value="<?= $arregloCarrito[$i]['Cantidad'] ;?>"
                            placeholder="" aria-label="Example text with button addon"
                            aria-describedby="button-addon1">
                        </div>
                      </td>
                      <td class="cant<?= $arregloCarrito[$i]['Id'] ;?>">$<?= $arregloCarrito[$i]['Precio'] * $arregloCarrito[$i]['Cantidad'] ;?></td>

                    </tr>

                      <?php } }  ?>


                  </tbody>
                </table>
              </div>
            </form>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="row mb-5">
                <div class="col-md-6 mb-3 mb-md-0">
                  <button class="btn btn-primary btn-sm btn-block"><a href="?reset=true" style="color: white">Vaciar Carrito</a></button>
                </div>
                <!--<div class="col-md-6 mb-3 mb-md-0">
                  <button class="btn btn-primary btn-sm btn-block"><a href="carrito.php"> Actualizar Carrito</a></button>
                </div>-->


                <div class="col-md-6" id="continuar">
                  <button class="btn btn-warning btn-sm btn-block"><a id="continuar" href="shop.php">Continuar Comprando</a></button>
                </div>
              </div>
            </div>
            <div class="col-md-6 pl-5">
              <div class="row justify-content-end">
                <div class="col-md-7">
                  <div class="row">
                    <div class="col-md-12 text-right border-bottom mb-5">
                      <h3 class="text-black h4 text-uppercase">Totales de carrito</h3>
                    </div>
                  </div>

                  <div class="row mb-5">
                    <div class="col-md-6">
                      <span class="text-black">Total</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black"><?= $total;?> </strong>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
                            <div class="row">
                    <div class="col-md-12">
                      <button class="btn btn-warning btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Finalizar la Compra</button>
                    </div>
          </div>
          <br>
        </div>
          <br>
         <br>
        <br>
       <br>
      </div>

     <footer>
      <?php require_once 'footer.php' ?>
    </footer>



    <?php require_once 'scripts.php' ?>
    <script src="js/carrito.js"></script>

</body>

</html>
