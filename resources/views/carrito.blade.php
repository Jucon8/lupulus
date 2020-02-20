@extends('layouts.header')
@section('titulo')
Carrito
@endsection
@section('contenido')

    <!-- inicio carrito-->

<br>
<br>

 <div class="site-wrap">
    <div class="detalle-titulo text-center">
        <h1><i class="fa fa-shopping-cart"></i>Carrito de Compras</h1>
    </div>
<br>
<br>

<div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="get">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-imagen">Imagen</th>
                    <th class="product-nombre">Producto</th>
                    <th class="product-precio">Precio</th>
                    <th class="product-cantidad">Cantidad</th>
                    <th class="product-total">Total</th>
                    <th class="product-remover">Remover</th>
                  </tr>
                </thead>
                <tbody>
                
                  @if(isset($producto->id))
                  {{--@foreach ($productos as $producto)--}}
                  <tr>

                     <td class="product-imagen">
                      <img  alt="Imagen" class="img-fluid" src="/storage/productos/{{$producto->imagen_producto}}" >
                    </td>
                    <td class="product-nombre">
                      <h2 class=" text-center">{{$producto->nombre}}</h2>
                    </td>
                    <td class="product-precio">${{number_format($producto->precio,2)}}</td>

                    <td>


                        <input type="number" class="input-update-item" min ="1" max="1000000" data-precio= "{{number_format($producto->precio,2)}}" data-id="{{$producto->id}}" value="{{$producto->cantidad}}" id ="producto_{{$producto->id}}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">


                    </td>
                    <td >${{number_format($producto->precio * $producto->cantidad,2)}}</td>
                    <td>
                     <a href="#" class="btn btn-danger" data-id="{{$producto->id}}">


                     <i class="fa fa-remove"></i>
                    </a>
                </td>

                   {{-- --}}




                  </tr>
                   {{-- @endforeach --}}
                   @endif

                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
             <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block">Actualizar Carrito</button>
              </div>
              <div class="col-md-6">
                <a href="" class="btn btn-primary btn-sm btn-block">Vaciar Carrito</a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Cupon</label>
                <p>Ingrese su código de cupón si tiene uno.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Código promocional">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-sm">Aplicar cupón</button>
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
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  {{-- <div class="col-md-6 text-right">
                    <strong class="text-black">{{$total}}</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class ="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">{{$total}}</strong>
                  </div>
                </div>
 --}}
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Finalizar la Compra</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

{{-- @else
    <h3><span class="badge badge-warnig">No hay Productos en el Carrito</span></h3>
@endif
 --}}
 @endsection

<?/*php
session_start();

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


/*
?>