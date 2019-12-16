

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <?php
    include_once("head.php");
      ?>
    <title>Lupulus</title>
  </head>
<body>
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
           <a class="nav-link text-white" style="text-transform: capitalize" href="#about1">sobre nosotros</a>
         </li>
         <li class="nav-item">
           <a class="nav-link text-white" style="text-transform: capitalize" href="#faqs">FAQs</a>
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


<!-- Inicio Home -->
<!-- Slide -->
<section class="container-fluid pt-3 pb-3" style="background-image: linear-gradient(black, grey)">
    <div class="carousel slide container" data-ride="carousel" id="carouselFull" style="height:50%; width: 50%;">
        <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" id="slide-chico">
            <div class="carousel-item active">
                <img class="d-block" src="img/birrabarril.jpg" alt="First slide" width="100%" height="50%">
                <div class="carousel-caption d-none d-md-block d-lg-block">
                    <h3>Barriles de Madera</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block" src="img/barriles1.jpg" alt="Second slide" width="100%" height="50%">
                <div class="carousel-caption d-none d-md-block d-lg-block">
                    <h3>Barriles de Acero</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block" src="img/botellasverdes.jpg" alt="Third slide" width="100%" height="50%">
                <div class="carousel-caption d-none d-md-block d-lg-block">
                    <h3>Botellas para Cerveza Artesanal</h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselFull" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselFull" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

</section>


<!-- Fin del Slide -->
<!-- boton flotante -->
<a class="btn flotante border border-warning" href="#inicio" role="button"> </a>

<!-- Inicio Seccion Sobre Nosotros -->
<section id="about1" class="container-fluid bg-warning">
    <div class="starter-template">
        <h1 class="mb-5">Nosotros Somos Lupulus</h1>
        <p>En mayo del 2014, como homebrewers, advertimos las dificultades en el autoabastecimiento de insumos básicos en la Región de Cuyo, por lo que decidimos introducirnos en el circuito para hacer más sencillo el aprovisionamiento de pequeños y medianos productores.
            Fue entonces cuando cobramos conciencia del crecimiento exponencial de la actividad y del gran potencial de la región para convertirse en uno de los polos cerveceros más importantes del país.
            A medida que tomamos contacto con las diversas necesidades de los productores, fuimos incorporando nuevos servicios complementarios a la actividad como kits de elaboración simple y asesoramiento personalizado que permiten al cervecero casero incursionar en el rubroEn cuanto a equipamiento, diseñamos y fabricamos nuestros propios modelos, adaptándolos a las exigencias del brewmaster.
            Al final de este recorrido podemos afirmar que LUPULUS es hoy una empresa que propone soluciones integrales a necesidades logísticas. Brinda calidad, disponibilidad y celeridad en la prestación de sus servicios.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 p-5 text-center">
                <img src="img/barriltap.jpg" class="img-fluid" alt="team">
            </div>
            <div class="col-md-12 col-lg-6 p-5 ">
                <h2>Alquiler de barriles</h2>
                <p>Somos los primeros en contar con flota propia de mas de 2.000 barriles
                    para alquilar. Son de origen chino con capacidad de 30 y 50 litros y
                    cuentan con conectores micromatic tipo G. Los planes de alquiler están
                    pensados para crecer mas rápido con menor inversión.</p>
            </div>
        </div>
    </div>
</section>
<!-- Fin Seccion Sobre Nosotros -->

<!-- Inicio Seccion FAQs-->
<section class="container pt-5 pb-5" id="faqs">

<h2 class="text-center">preguntas frecuentes</h2>
  <div class="accordion" id="accordionExample">

    <!-- Pregunta 1 -->
    <div class="card">
      <div class="card-header bg-success" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed text-white text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span>¿Cómo hago para comprar en Lupulus?</span>
          </button>
        </h2>
      </div>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body bg-warning">
          <span id="sp_resp_1">Creese una cuenta de usuario en nuestra web, con su correo electrónico. Seleccione los productos que desea, añádalos al carrito y siga los pasos por los que lo llevará la página.
              Una vez que haya hecho la compra, realice el pago, confírmelo a través de nuestro Formulario de Contacto y aguarde el pedido.
            </span>
        </div>
      </div>
    </div>

  <!-- Pregunta 2 -->
    <div class="card">
      <div class="card-header bg-success" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed text-white text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <span>¿Hay stock de tal o cual producto / equipamiento?</span>
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body bg-warning">
          <span id="sp_resp_2">Todos los productos que la página permite comprar significa que tiene stock. Caso contrario verá una leyenda que indica que el producto está Fuera de Stock.
          </span>
        </div>
      </div>
    </div>

  <!-- Pregunta 3 -->
    <div class="card">
      <div class="card-header bg-success" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed text-white text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <span>¿Cuánto tiempo demorará el envío?</span>
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body bg-warning">
          <span id="sp_resp_3">Una vez recibido el pago y confirmado, armaremos su pedido y
          lo enviaremos dentro de las 48 horas hábiles. Luego, el tiempo dependerá del transportista seleccionado.
        </span>
        </div>
      </div>
    </div>

  <!-- Pregunta 4 -->
  <div class="card">
    <div class="card-header bg-success" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed text-white text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <span>¿Hasta que hora puedo pedir un envío en Córdoba capital para que me llegue al día siguiente?</span>
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body bg-warning">
        <span id="sp_resp_4">Los envíos son de Martes a Viernes.
          Los pedidos se toman hasta las 13 horas del día anterior, o según disponibilidad del transporte, lo que suceda primero.
          Éstos detalles se le informarán a su debido momento.
        </span>
      </div>
    </div>
  </div>


  <!-- Pregunta 5 -->
  <div class="card">
    <div class="card-header bg-success" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed text-white text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <span>¿Hasta que día y hora puedo pedir un envío en el interior de Córdoba para que me llegue al día siguiente?</span>
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body bg-warning">
        <span id="sp_resp_5">Una vez recibido el pago, Lupulus arma el paquete con su pedido, y lo envía de manera gratuita al transportista que llegará a la terminal de ómbinus de su ciudad o la ciudad más cercana, según corresponda.
          Mientras tanto se le enviará a su correo electrónico el número de guía y el nombre del transporte, para su mayor seguridad. Una vez que el pedido esté en la terminal, usted deberá abonar
          el costo del envío para poder retirarlo. Este valor dependerá del transportista, la distancia y el peso del o los bultos.
        </span>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Fin Seccion FAQs -->

<!-- Inicio Seccion Contacto -->
<div class="container-fluid" id="contacto-home">
  <?php include_once("./contacto.php") ?>
</div>

<!-- Fin Seccion Contacto -->

<!-- Fin del Home -->

<!-- Inicio del Footer -->
<section style="background-color:#000">
  <div class="container-fluid pt-3" style="width:20%;height:20%;">
    <div class="row">
      <div class="col">
        <div class="card mb-4 border-warning" style="background-color:#000;">
          <img src="./img/logo.png" class="card-img-top" alt="logo">
        </div>
      </div>
    </section>

<!-- Desarrolado por -->
<footer>
  <?php include("desarroladoPor.php"); ?>
</footer>

<!-- Fin del Footer -->
<!-- Optional JavaScript -->
<?php include_once("scripts.php") ?>

  </body>
</html>
