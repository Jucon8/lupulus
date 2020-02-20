    @extends('layouts.header-admin')
    @section('titulo') 
    Panel de Control
    @endsection
    @section('contenido')
     

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" id="graph">
            <br>
            <br>
            <br>
            <br>
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
    <hr id="ventas">
    <br>
    <br>

          <h2>Ventas</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Id_venta</th>
                  <th>Id_usuario</th>
                  <th>Id_producto</th>
                  <th>Pago</th>
                  <th>Estado</th>
                  <th>Envio</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>User_id</td>
                  <td>Product_id</td>
                  <td>Tarjeta/efectivo</td>
                  <td>en curso(1)/finalizada(0)</td>
                  <td>retiro por sucursal/envio a domicilio</td>
                </tr>
              </tbody>
            </table>
          </div>

        </main>
      </div>
    </div>

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
    
    @endsection
