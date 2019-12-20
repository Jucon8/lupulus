<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <?php include("head.php") ?>
    <title> Mi Cuenta </title>
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
    <div class="container-fluid" id=fondo>
      <div class="container-fluid pt-5" id=micuenta>
        <div class="container-fluid">
          <div class="row">
            <!-- columna izquierda -->
            <div class="col-md-3 pb-3">
              <div class="col-md-12 text-center">
                <h4>{{Nombre de Usuario}}</h4>
              </div>
              <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar rounded-circle img-thumbnail" alt="avatar">
                <p>Selecciona una imagen de perfil</p>
                <div class="container col-12">
                  <!-- FUNCION GUARDAR AVATAR -->
               <?php
               //Declaro la funcion guardar avatar
                    function guardarAvatar(){
                      //Si se subió un archivo-->
                    if ($_FILES)
                    {  //datos del arhivo
                    $nombre = $_FILES['avatar']['name'];
                    $tipo = $_FILES['avatar']['type'];
                    $tamano = $_FILES['avatar']['size'];
                    $archivo = $_FILES['avatar']['tmp_name'];
                    //compruebo si las características del archivo son las que deseo
                    if (!((strpos($tipo, "jpg") || strpos($tipo, "jpeg") || strpos($tipo, "gif")) && ($tamano < 1000000))) {
                      //si no se cumplen que imprima el siguiente mensaje:
                        echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 1 MB máximo.</td></tr></table>";
                    }else{
                      //si no, que guarde el avatar en carpeta img/avatars
                        if (move_uploaded_file($archivo, 'img/avatars/'.$nombre)){
                        echo "<br>";
                        echo "CARGA EXITOSA <br>  $tamano KB <br> ";
                        }else{
                          //si no pudo subir el avatar, por algun otro motivo:
                              echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
                        }
                      }
                    }
                  }
                ?>

                      <form action="micuenta.php" method="post" enctype="multipart/form-data">
                          <input type="file" name="avatar" id="">
                          <br>
                          <br>
                          <br>
                          <div>
                          <button class="btn btn-primary" type="submit" action=<?php guardarAvatar()?>> Subir Archivo </button>
                          </div>
                      </form>
                </div>
              </div>
            </div>
            <!-- fin columna izquierda -->

            <div class="col-md-9">

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">tus datos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#pedidos" role="tab" aria-controls="profile" aria-selected="false">pedidos y envios</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <form>
                    <div class="form-row">
                      <div class="form-group col-lg-6">
                        <label for="inputAddress">nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ej: juan">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="inputAddress">apellido</label>
                        <input type="text" class="form-control" id="apellido" placeholder="Ej: perez">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="inputAddress">teléfono</label>
                        <input type="text" class="form-control" id="telefono1" placeholder="Ej: (0351) 157-832514">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="inputEmail4">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Ej: juancito@gmail.com">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="inputCity">ciudad</label>
                        <input type="text" class="form-control" id="ciudad" placeholder="Ej: Córdoba">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="inputAddress">direccion</label>
                        <input type="text" class="form-control" id="domicilio" placeholder="Ej: La Rioja 532">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="inputPassword4">contraseña nueva</label>
                        <input type="password" class="form-control" id="password" placeholder="**********">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="inputPassword4">verificar contraseña nueva</label>
                        <input type="password" class="form-control" id="password2" placeholder="**********">
                      </div>
                      <div class="col-xs-12 col-md-6 pb-3">
                        <button class="btn btn-md btn-success" type="submit"><i class="icon ion-md-checkbox"></i> Guardar </button>
                        <button class="btn btn-md" type="reset"><i class="icon ion-md-refresh"></i> Limpiar</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="pedidos" role="tabpanel" aria-labelledby="profile-tab">
                  <?php include("carrito.php")?>
                </div>
              </div>
            </div><!-- fin columna derecha -->
          </div><!--/row-->
        </div> <!--Div micuenta-->
      </div> <!--fondo-->
    </div>
    <footer>
      <?php include("./desarroladoPor.php") ?>
    </footer>
    <?php include_once("scripts.php") ?>
  </body>
