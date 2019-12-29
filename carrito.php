<?php

session_start();
$titulo="Carrito";
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <?php require_once 'head.php' ?>
  <title>Carrito</title>

</head>

<body>

  <!--Inicio header-->
  <?php require_once 'header.php' ?>

  <!-- inicio carrito-->

  <div class="carrito" id="carrito">
    <div class="px-4 px-lg-0">
      <div class="pb-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

              <!-- Inicio tabla carrito -->

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 bg-light">
                        <div class="p-2 px-3 text-uppercase">Producto</div>
                      </th>
                      <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase text-center">Precio <br> unitario</div>
                      </th>
                      <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Cantidad</div>
                      </th>
                      <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Eliminar</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" class="border-0">
                        <div class="p-2">
                          <img src="img/olla.png" alt="" width="70" class="img-fluid rounded d-none d-sm-none d-md-block">
                          <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Olla para concinar cerveza</a></h5><span class="text-muted font-weight-normal font-italic d-block">Categoría: Ollas</span>
                          </div>
                        </div>
                      </th>
                      <td class="border-0 align-middle"><strong>$2340</strong></td>
                      <td class="border-0 align-middle"><strong><input type="number" class="input-res" name="quantity" value="1" min="1" max="100"></strong></td>
                      <td class="border-0 align-middle"><a href="#REMOVE" class="text-dark"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <div class="p-2">
                          <img src="img/botella.jpg" alt="" width="70" class="img-fluid rounded d-none d-sm-none d-md-block">
                          <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Botella</a></h5><span class="text-muted font-weight-normal font-italic">Categoría: Envasado</span>
                          </div>
                        </div>
                      </th>
                      <td class="align-middle"><strong>$79.00</strong></td>
                      <td class="align-middle"><strong><input type="number" class="input-res" name="quantity" value="10" min="1" max="100"></strong></td>
                      <td class="align-middle"><a href="#REMOVE" class="text-dark"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <div class="p-2">
                          <img src="img/canilla8pulgada.jpg" alt="" width="70" class="img-fluid rounded d-none d-sm-none d-md-block">
                          <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Canilla de 8 pulgadas con bomba</a></h5><span class="text-muted font-weight-normal font-italic">Categoría: Equipamiento</span>
                          </div>
                        </div>
                      <td class="align-middle"><strong>$8450</strong></td>
                      <td class="align-middle"><strong><input type="number" class="input-res" name="quantity" value="1" min="1" max="100"></strong></td>
                      <td class="align-middle"><a href="#REMOVE" class="text-dark"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- finalizar compra -->
            </div>
          </div>

          <div class="row py-5 p-4 bg-white rounded shadow-sm">
            <div class="col-lg-12">
              <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Detalle de Compra</div>
              <div class="p-4">
                <p class="font-italic mb-4">Al finalizar la compra, uno de nuestros representantes se comunicará con usted para confirmar los detalles de envío.</p>
                <ul class="list-unstyled mb-4">
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Sub-Total </strong><strong>$11580</strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Mercado Envios</strong><strong>$580</strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                    <h5 class="font-weight-bold">$12160</h5>
                  </li>
                </ul><a href="#FINALIZAR-COMPRA" class="btn btn-dark rounded-pill py-2 btn-block">Finalizar Compra</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!--div carrito-->
  <!-- Desarrolado por -->
  <footer>
  </footer>
  <!-- Fin del Footer -->
  <!-- Optional JavaScript -->
  <?php require_once 'scripts.php' ?>

</body>