<?php

session_start();
$titulo="Panel de Control";
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <?php require_once 'head.php' ?>
</head>

  <body>
  <?php require_once 'header.php' ?>
    <div class="container-fluid" id="bodyAdmin">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block  sidebar" id="sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" id="menuAdmin">
              <li class="nav-item text-white">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Panel de control <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Pedidos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Productos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Clientes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Estadisticas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="mail"></span>
                  Mensajes
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" id="graph">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Panel de Control</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Compartir</button>
                <button class="btn btn-sm btn-outline-secondary">Exportar</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                Esta semana
              </button>
            </div>
          </div>
          <div class="panel-body">
                    <div id="chart">
            <canvas class="my-4" id="myChart" width="2" height="1"></canvas>
            </div>
                </div>

          <h2>Productos publicados</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Id_Producto</th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Precio</th>
                  <th>Stock</th>
                  <th>Estado</th>
                  <th>Imagenes</th>
                  <th>Id_Categoria</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>1</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>0</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>15</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>5</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>1</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>0</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>1</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>100</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>1000</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>23</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>14</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>15</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>52</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>55</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>23</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>Producto</td>
                  <td>Lorem ipsum dolor sit amet.</td>
                  <td>$$$$$$$</td>
                  <td>14</td>
                  <td>Activo</td>
                  <td>imagen1, imagen2, imagen3</td>
                  <td>Categoria #</td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
  <?php require_once 'scripts.php' ?>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0.2,
            backgroundColor: 'transparent',
            borderColor: '#f0b500',
            borderWidth: 4,
            pointBackgroundColor: '#f0b500'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
        <footer>
        <?php require_once 'footer.php' ?>
    </footer>
  </body>
</html>
