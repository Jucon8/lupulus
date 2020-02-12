
 @extends('layouts.header')

    @section('contenido')
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
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only" id="nosotros">Siguiente</span>
        </a>
    </div>
    <!-- NOSOTROS -->
    <div class="jumbotron-fluid">
        <br>
        <div class="container">
            <h2 class="text-center">¿Quiénes somos?</h1>
                <br>
                <h5 class="text-center">En mayo del 2014, como homebrewers, advertimos las dificultades en el autoabastecimiento de insumos básicos en la Provincia de Córdoba, por lo que decidimos introducirnos en el circuito para hacer más sencillo el aprovisionamiento de pequeños y medianos productores.
                    Fue entonces cuando cobramos conciencia del crecimiento exponencial de la actividad y del gran potencial de la provincia para convertirse en uno de los polos cerveceros más importantes del país.
                    A medida que tomamos contacto con las diversas necesidades de los productores, fuimos incorporando nuevos servicios complementarios a la actividad como kits de elaboración simple y asesoramiento personalizado que permiten al cervecero casero incursionar en el rubro. <br>
                    En cuanto a equipamiento, diseñamos y fabricamos nuestros propios modelos, adaptándolos a las exigencias del brewmaster. <br>
                    Al final de este recorrido podemos afirmar que LUPULUS es hoy una empresa que propone soluciones integrales a necesidades logísticas. Brinda calidad, disponibilidad y celeridad en la prestación de sus servicios.</h5>
                <div class=" row">
                    <div class="col-lg-6 p-0">
                        <img src="img/barriltap.jpg" class="img-fluid" id="barriles" alt="barriles">
                    </div>
                    <div class=" col-lg-6 " id="texto_medio">
                        <h2 class=" text-center pb-4 ">Alquiler de barriles</h2>
                        <h5 class="text-center">Somos los primeros en contar con flota propia de mas de 2.000 barriles
                            para alquilar. Son de origen chino con capacidad de 30 y 50 litros y
                            cuentan con conectores micromatic tipo G. Los planes de alquiler están
                            pensados para crecer mas rápido con menor inversión.</h5>

                    </div>
                </div>

        </div>
        <br id="preguntas">
        <br>
    </div>


    <!-- PREGUNTAS -->
    <section class="preguntas">
        <br>
        <br>
        <div class="container">
            <h2 class="text-center pt-4 pb-3" style="color: white">Preguntas Frecuentes</h2>
            <div class="accordion" id="accordionExample">
                <div class="card" id="card">
                    <div class="card-header" id="heading1">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                <span class="span">¿Cómo hago para comprar en Lupulus?</span>
                            </button>
                        </h2>
                    </div>

                    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
                        <div class="card-body-faq">
                            <span class="span" id="sp_resp_1">Para comprar en LÚPULUS, debe crearse una cuenta en <a href="registrarse.php">Registrarse</a> o si ya tiene cuenta <a href="iniciarsesion.php">Iniciar sesion</a>. <br> para finalizar la compra debe ir hacia <a href="carrito.php">Finalizar compra</a>.
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Pregunta 2 -->
                <div class="card" id="card">
                    <div class="card-header" id="heading2">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                <span class="span">¿Hay stock de tal o cual producto / equipamiento?</span>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
                        <div class="card-body-faq">
                            <span class="span" id="sp_resp_2">Todos los productos que la página permite comprar significa que tiene stock. Caso contrario verá una leyenda que indica que el producto está Fuera de Stock.
                        </div>
                    </div>
                </div>
                <!-- Pregunta 3 -->
                <div class="card" id="card">
                    <div class="card-header" id="heading3">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                <span class="span">¿Cuánto tiempo demorará el envío?</span>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                        <div class="card-body-faq">
                            <span class="span" id="sp_resp_3">Una vez recibido el pago y confirmado, armaremos su pedido y
                                lo enviaremos dentro de las 48 horas hábiles. Luego, el tiempo dependerá del transportista seleccionado.
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Pregunta 4 -->
                <div class="card" id="card">
                    <div class="card-header" id="heading4">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <span class="span">¿Hasta que hora puedo pedir un envío en Córdoba capital para que me llegue al día siguiente?</span>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                        <div class="card-body-faq">
                            <span class="span" id="sp_resp_4">Los envíos son de Martes a Viernes.
                                Los pedidos se toman hasta las 13 horas del día anterior, o según disponibilidad del transporte, lo que suceda primero.
                                Éstos detalles se le informarán a su debido momento.
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Pregunta 5 -->
                <div class="card" id="card">
                    <div class="card-header" id="heading5">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                <span class="span">¿Hasta que día y hora puedo pedir un envío en el interior de Córdoba para que me llegue al día siguiente?</span>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                        <div class="card-body-faq">
                            <span class="span" id="sp_resp_5">Una vez recibido el pago, Lupulus arma el paquete con su pedido, y lo envía de manera gratuita al transportista que llegará a la terminal de ómbinus de su ciudad o la ciudad más cercana, según corresponda.
                                Mientras tanto se le enviará a su correo electrónico el número de guía y el nombre del transporte, para su mayor seguridad. Una vez que el pedido esté en la terminal, usted deberá abonar
                                el costo del envío para poder retirarlo. Este valor dependerá del transportista, la distancia y el peso del o los bultos.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>

    <!-- CONTACTOS -->
    <section id="contacto">
        <br>
        <section class="container-fluid pb-10 pt-5">
            <h2 class="text-center  pt-4 pb-3">Contacto</h2>

            <div class="row">

                <div class="col-lg-5 mb-4">

                    <div class="card">
                        <div class="card-body-faq" id="transparente">
                            <form method="" action="">
                                <div class="md-form-group">
                                    <span data-feather="user"></span> <label for="form-name"> Nombre</label>
                                    <input type="text" id="form-name" class="form-control">
                                </div>

                                <div class="md-form-group">
                                    <span data-feather="tag"> </span> <label for="form-motivo"> Motivo</label>
                                    <select class="form-control" name="motivo" id="form-motivo">
                                        <option>consulta general</option>
                                        <option>realizar pedido</option>
                                        <option>informar un problema</option>
                                    </select>

                                </div>

                                <div class="md-form-group">
                                 <span data-feather="briefcase"> </span> <label for="form-Empresa"> Empresa</label>
                                    <input type="text" id="form-Empresa" class="form-control">

                                </div>
                                <div class="md-form-group">
                                    <span data-feather="mail"> </span> <label for="form-email"> Email</label>
                                    <input type="text" id="form-email" class="form-control">

                                </div>

                                <div class="md-form-group">
                                    <span data-feather="edit"> </span> <label for="form-text"> Mensaje</label>
                                    <textarea id="form-text" class="form-control md-textarea" rows="5"></textarea>

                                </div>

                                <div class="text-center mt-4">
                                    <button class="btn btn-warning" type="submit"><i class="icon ion-md-checkbox"></i> Enviar </button>
                                    <button class="btn btn-danger" type="reset"><i class="icon ion-md-refresh"></i> Limpiar</button>
                                </div>
                            </form>
                        </div>

                    </div>


                </div>
                <div class="col-lg-7" id="contactoiconos">

                    <!--Google map-->
                    <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13620.701466414766!2d-64.1893472!3d-31.4092941!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6693430c4ee3410f!2sEspacio%20Project!5e0!3m2!1ses-419!2sar!4v1576412754995!5m2!1ses-419!2sar" width="100%" height="50%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>

                    <br>

                    <div class="row text-center">
                        <div class="col-md-4   ">
                            <span data-feather="map-pin"></span>
                            <br>
                            <p>La Rioja 532</p>
                            <p>Córdoba Capital</p>
                            <p>Argentina</p>
                        </div>

                        <div class="col-md-4 ">
                            <span data-feather="smartphone"></span>
                            <br>
                            <p>351-7832514</p>
                            <p>351-5434229</p>
                            <p>351-2128654</p>

                        </div>

                        <div class="col-md-4 ">
                           <span data-feather="mail"></span>
                            <br>
                            <p>info@lupulus.com</p>
                            <p>ventas@lupulus.com</p>
                            <p>contacto@lupulus.com</p>
                        </div>

                    </div>
                </div>


            </div>
            <br>
        </section>
@endsection
