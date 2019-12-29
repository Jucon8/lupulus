<?php
session_start();

require_once 'controladores/validaciones.php';

$titulo = "Mi Cuenta";

$nombre = isset($_SESSION["username"])? $_SESSION["username"] : "";
$apellido = isset($_SESSION["apellido"])? $_SESSION["apellido"] : "";
$direccion = isset($_SESSION["direccion"])? $_SESSION["direccion"] : "";
$email = isset($_SESSION["email"])? $_SESSION["email"] : "";
$telefono = isset($_SESSION["telefono"])? $_SESSION["telefono"] : "";
$ciudad = isset($_SESSION["ciudad"])? $_SESSION["ciudad"] : "";
$avatar = isset($_SESSION["avatar"])? $_SESSION["avatar"] : "";

/* FUNCION GUARDAR AVATAR */

//Declaro la funcion guardar avatar
    function guardarAvatar()
    {
      //Si se subió un archivo-->
      if ($_FILES) {  //datos del arhivo
        $nombreAvatar = $_FILES['avatar']['name'];
        $tipo = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $tipo = strtolower($tipo);
        $tamano = $_FILES['avatar']['size'];
        $archivo = $_FILES['avatar']['tmp_name'];
        $nombreAvatar2 = "avatar_" . uniqid() . ".". $tipo;
        //compruebo si las características del archivo son las que deseo
        if ((!($tipo=="jpg") || ($tipo=="jpeg") || ($tipo=="png")) && ($tamano < 1000000)) {
          //si no se cumplen que imprima el siguiente mensaje:
          echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .png, .jpeg o .jpg<br><li>se permiten archivos de 1 MB máximo.</td></tr></table>";
        } else {
          //si no, que guarde el avatar en carpeta img/avatars
          if (move_uploaded_file($archivo, "img/avatars/".$nombreAvatar2)) {
            echo "<br>";
            echo "CARGA EXITOSA <br>  $tamano KB <br> ";
          } else {
            //si no pudo subir el avatar, por algun otro motivo:
            echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
          }
        }
      }
    }
  
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <?php require_once 'head.php' ?>
</head>

<body>
  <!--Inicio header-->
  <?php require_once 'header.php' ?>

  <div class="container-fluid pb-5" id=fondo>
    <div class="container-fluid pt-5 pb-5" id=micuenta>
      <div class="container-fluid">
        <div class="row">
          <!-- columna izquierda -->
          <div class="col-md-3 pb-3">
            <div class="col-md-12 text-center">
              <h3><?=$nombre?></h3>
            </div>
            <div class="text-center">
            <?php   //MOSTRAR AVATAR
              //function mostrarAvatar() {
             // if ($_FILES) {
             // $nombre = $_FILES['avatar']['name'];
            //  echo 'src=img/avatars/' . $nombre;
            //  }else{
            //  echo 'src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png"';
            //  }
             ?>
              <?php if (!empty($_SESSION["avatar"])):?>
              <!--mostrarAvatar()-->
              <img src="img/avatars/<?=$_SESSION["avatar"]?>" class="avatar rounded-circle img-thumbnail border border-dark" alt="avatar">
              <?php else: ?>
              <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar rounded-circle img-thumbnail" alt="avatar">
              <?php endif; ?>
              <p>Selecciona una imagen de perfil</p>
              <div class="container col-12">


                <form action="micuenta.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="avatar" id="">

                  <div>
                    <button class="btn btn-primary mt-5" type="submit" action="<?php guardarAvatar()?>"> Subir Archivo </button>
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
                      <input type="text" class="form-control" id="nombre" placeholder="Ej: horacio" value="<?= $_SESSION["username"]?>">
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="inputAddress">apellido</label>
                      <input type="text" class="form-control" id="apellido" placeholder="Ej: perez" value="<?= $_SESSION["apellido"]?>">
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="inputAddress">teléfono</label>
                      <input type="text" class="form-control" id="telefono1" placeholder="Ej: (0351) 157-832514" value="<?= $_SESSION["telefono"]?>">
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="inputEmail4">E-mail</label>
                      <input type="email" class="form-control" id="email" placeholder="Ej: juancito@gmail.com" value="<?= $_SESSION["email"]?>">
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="inputCity">ciudad</label>
                      <input type="text" class="form-control" id="ciudad" placeholder="Ej: Córdoba" value="<?= $_SESSION["ciudad"]?>">
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="inputAddress">direccion</label>
                      <input type="text" class="form-control" id="domicilio" placeholder="Ej: La Rioja 532" value="<?= $_SESSION["direccion"]?>">
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
                <?php include("carrito.php") ?>
              </div>
            </div>
          </div><!-- fin columna derecha -->
        </div>
        <!--/row-->
      </div>
      <!--Div micuenta-->
    </div>
    <!--fondo-->
    <br>
    <br>
    <br>

  </div>
  <!-- Desarrolado por -->
  <footer class="pb-0 mb-0">
    <?php require 'desarrolladoPor.php' ?>
  </footer>
  <!-- Fin del Footer -->
  <!-- Optional JavaScript -->
  <?php require_once 'scripts.php' ?>

</body>
</html>
