<!DOCTYPE html>
<html lang="es" dir="ltr">


<head>

    <?php require_once 'head.php' ?>
    <title>Document</title>
</head>

<body>
    <?php require_once 'header.php' ?>
    <!-- CAROUSEL -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active" style="background-image: url('img/birrabarril.jpg')">
                <div class="carousel-caption  d-md-block">
                    <h3> Barriles de Madera</h3>

                </div>
            </div>

            <div class="carousel-item" style="background-image: url('img/barriles1.jpg')">
                <div class="carousel-caption  d-md-block">
                    <h3>Barriles de Acero</h3>

                </div>
            </div>

            <div class="carousel-item" style="background-image: url('img/botellasverdes.jpg')">
                <div class="carousel-caption  d-md-block">
                    <h3>Botellas para Cerveza Artesanal</h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- NOSOTROS -->
    <div class="jumbotron-fluid " id="nosotros">
        <div class="container">
            <h2 class="text-center" id="nosotros">Nosotros</h1>
                <p>En mayo del 2014, como homebrewers, advertimos las dificultades en el autoabastecimiento de insumos básicos en la Región de Cuyo, por lo que decidimos introducirnos en el circuito para hacer más sencillo el aprovisionamiento de pequeños y medianos productores.
                    Fue entonces cuando cobramos conciencia del crecimiento exponencial de la actividad y del gran potencial de la región para convertirse en uno de los polos cerveceros más importantes del país.
                    A medida que tomamos contacto con las diversas necesidades de los productores, fuimos incorporando nuevos servicios complementarios a la actividad como kits de elaboración simple y asesoramiento personalizado que permiten al cervecero casero incursionar en el rubroEn cuanto a equipamiento, diseñamos y fabricamos nuestros propios modelos, adaptándolos a las exigencias del brewmaster.
                    Al final de este recorrido podemos afirmar que LUPULUS es hoy una empresa que propone soluciones integrales a necesidades logísticas. Brinda calidad, disponibilidad y celeridad en la prestación de sus servicios.</p>
                <div class=" row">
                    <div class="col-lg-6 p-5">
                        <img src="img/barriltap.jpg" class="img-fluid" alt="team">
                    </div>
                    <div class=" col-lg-6 " id="texto_medio">
                        <h2 class=" text-center pb-4 ">Alquiler de barriles</h2>
                        <p>Somos los primeros en contar con flota propia de mas de 2.000 barriles
                            para alquilar. Son de origen chino con capacidad de 30 y 50 litros y
                            cuentan con conectores micromatic tipo G. Los planes de alquiler están
                            pensados para crecer mas rápido con menor inversión.</p>

                    </div>
                </div>

        </div>
    </div>


    <!-- PREGUNTAS -->
    <section id="preguntas">
        <?php require_once 'preguntas.php' ?>
    </section>

    <!-- CONTACTOS -->
    <section id="contacto">
        <?php require_once 'contacto.php' ?>
    </section>

    <!-- FOOTER -->
    <?php require_once 'footer.php' ?>
    <!-- Fin del Footer -->
    <!-- Optional JavaScript -->
    <?php require_once 'scripts.php' ?>

</body>

</html>