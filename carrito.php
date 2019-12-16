<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito</title>
    		<?php include("head.php")?>

</head>
<body>

<!--Inicio header-->
  <header id="inicio">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000;">
     <a class="navbar-brand" href="index.php" style="text-transform: uppercase; font-size:2rem; width:300px;"><img src="img/logo1.png" style="max-width: 100%;" alt="LUPULUS"></a>
     <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="text-transform: uppercase">
       menu <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item">
           <a class="nav-link text-white" style="text-transform: capitalize" href="index.php"> Home <span class="sr-only"></span></a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle text-white" style="text-transform: capitalize" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             mi cuenta
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" style="text-transform: capitalize" href="micuenta.php">mi perfil</a>
             <a class="dropdown-item" style="text-transform: capitalize" href="iniciarsesion.php">ingresar</a>
             <a class="dropdown-item" style="text-transform: capitalize" href="registrarse.php">registrarse</a>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link text-white" style="text-transform: capitalize" href="tienda-lista.php">shop</a>
         </li>
         <!-- <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle text-white" style="text-transform: capitalize" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             servicios
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" style="text-transform: capitalize" href="#">alquiler de barriles</a>
             <a class="dropdown-item" style="text-transform: capitalize" href="#">distribución</a>
           </div>
         </li> -->
         <li class="nav-item">
           <a class="nav-link text-white" style="text-transform: capitalize" href="index.php#about1">sobre nosotros</a>
         </li>
         <li class="nav-item">
           <a class="nav-link text-white" style="text-transform: capitalize" href="index.php#faqs">FAQs</a>
         </li>
         <li class="nav-item">
           <a class="nav-link text-white" style="text-transform: capitalize" href="contacto.php">contacto</a>
         </li>
       </ul>
       <ul class="navbar-nav">
         <li class="nav-item">
           <a class="nav-link text-white" style="text-transform: capitalize" href="carrito.php">
             <i class="icon ion-md-cart"></i> carrito</a>
         </li>
       </ul>
       </div>
     </nav>
  </header>
  <br>

  <!-- inicio carrito-->

    <div class="carrito" id="carrito">    	
        
        <!-- Favicon -->
	    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAB01+gAAAAAAAXC4wDr8/UAtsnMAA/n8gBNzeMA2OHjAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAESYAJgJgERERJgAmAmARERElACZycCIiESV2dnJwd3IRJXJ2cnARchEmcnJycBFyESZydnVwEXIRJXJ1dXARchElcnVycBFyESUCJXJwEXIRJQIlcmB3chEiIiIiIiIiESVVVVUicRERREMzMzRxERFDMzMzNBEREUREREREERHADwAAwA8AAMAAAADAAAAAwAwAAMAMAADADAAAwAwAAMAMAADADAAAwAAAAMAAAADABwAAwAcAAMAPAADADwAA" rel="icon" type="image/x-icon" />
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- boostrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<!--IONICONS-->
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <!--FONT AWESOME-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Carrito</title>

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
                        <td class="border-0 align-middle"><strong><input type="number" class="input-res" name="quantity" value= "1" min="1" max="100"></strong></td>
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
                        <td class="align-middle"><strong><input type="number" class="input-res" name="quantity" value= "10" min="1" max="100"></strong></td>
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
                            <td class="align-middle"><strong><input type="number" class="input-res" name="quantity" value= "1" min="1" max="100"></strong></td>
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

</div> <!--div carrito-->
</body>
</html>


