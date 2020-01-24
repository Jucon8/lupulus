<?php

session_start();
$titulo="Panel de Control";
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <?php require_once 'head.php' ?>
</head>

  <body class="bg-light">
  <?php require_once 'header.php' ?>
    <div class="container">
      <br>
      <br>
      <br>
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Tu carrito</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
              <!-- Aqui van los productos que selecciono el cliente en el carrito (solo el nombre, el precio y el total) -->
                <h6 class="my-0">Producto</h6>
                <small class="text-muted">description</small>
              </div>
              <span class="text-muted">Precio</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <!-- <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li> -->
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>

          <!-- <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Reclamar</button>
              </div>
            </div>
          </form> -->
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Datos de Facturacion y Envío</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nombre</label>
                <input type="text" class="form-control" id="firstName" placeholder="Ingrese su nombre" value="" required>
                <div class="invalid-feedback">
                  Ingrese su nombre.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Apellido</label>
                <input type="text" class="form-control" id="lastName" placeholder="Ingrese su apellido" value="" required>
                <div class="invalid-feedback">
                  Ingrese su apellido.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Usuario</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Ingrese su usuario" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Ingrese su nombre de usuario.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="nombre@lupulus.com" required>
              <div class="invalid-feedback">
                Ingrese el Email con el que se registró.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Dirección</label>
              <input type="text" class="form-control" id="address" placeholder="Calle 123" required>
              <div class="invalid-feedback">
                Ingrese su dirección para recibir envíos.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">País</label>
                <select class="custom-select d-block w-100" id="country">
                  <option>Argentina</option>
                </select>
                <div class="invalid-feedback">
                  Seleccione su país.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Provincia</label>
                <select class="custom-select d-block w-100" id="provincia" required>
                  <option value="">Seleccione su provincia</option>
                  <option>Cordoba</option>
                  <!-- Aqui deberiamos recorrer con un foreach la base de datos para mostrar las provincias disponibles -->
                </select>
                <div class="invalid-feedback">
                  Seleccione una provincia.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Codigo postal</label>
                <input type="text" class="form-control" id="zip" placeholder="Codigo postal" required>
                <div class="invalid-feedback">
                  Ingrese su codigo postal.
                </div>
              </div>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Guardar mis datos para la próxima compra</label>
              <!-- si el usuario selecciona esta opcion, debe guardar estos datos, en la base de datos. -->
              <!-- Tambien podria guardar una simple cookie -->
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Pago</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Tarjeta de Crédito</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Tarjeta de Débito</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Mercado Pago</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nombre en la tarjeta</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Ingrese el nombre tal cual está en la tarjeta</small>
                <div class="invalid-feedback">
                  Ingrese el nombre de la tarjeta.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Numero de la tarjeta</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <small class="text-muted">Ingrese todos los numeros de su tarjeta sin espacios</small>
                <div class="invalid-feedback">
                  Ingrese los números de su tarjeta.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Fecha de vencimiento</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="mm/aa" required>
                <div class="invalid-feedback">
                  Ingrese la fecha de vencimiento.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <small class="text-muted">Código de tres dígitos</small>
                <div class="invalid-feedback">
                  Ingrese el código de seguridad que figura al dorso de su tarjeta.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar compra</button>
          </form>
        </div>
      </div>
      <br>
    </div>
        <footer>
        <?php require_once 'footer.php' ?>
    </footer>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
      <?php require_once 'scripts.php' ?>


  </body>
</html>
