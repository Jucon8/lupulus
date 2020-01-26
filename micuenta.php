<?php
session_start();
require_once("./controladores/validaciones.php");
require_once("./BasesDeDatos/pdo.php");
require_once("./class/class-usuario.php");
require_once("./class/class-cliente.php");
require_once("./class/class-provincia.php");
require_once("./class/class-tipoCons.php");


$titulo = "Mi Cuenta";
$provincias = provincia:: buscarProvincia();

$tipoConsumidor = tipoCons:: buscarTipoCons();

$erroresEnAvatar = [];

if ($_POST) {
  // obtengo extension del archivo nuevo para Avatar//
    if (!empty($_FILES["avatar"]["name"])) {
      $erroresEnAvatar = validarAvatar();
      if(count($erroresEnAvatar) == 0){
        $extension = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $extension = strtolower($extension);
        //obtengo ruta de archivo //
        $archivoTemporal = $_FILES["avatar"]["tmp_name"];
        //direccion de guardado de avatar //
        $nombreAvatar2 = $_SESSION["username"] . "_" . uniqid() . "." . $extension;
        move_uploaded_file($archivoTemporal, "img/avatars/" . $nombreAvatar2);
      }
    } elseif(isset($_SESSION['avatar'])) {
        $nombreAvatar2 = $_SESSION['avatar'];
    }
  $id= $_SESSION['id'];
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $telefono = $_POST["telefono"];
  $direccion = $_POST["direccion"];
  $provincia = $_POST["provincia"];
  $ciudad = $_POST["ciudad"];
  $tipoCons = $_POST["tipoCons"];
  $avatar = $nombreAvatar2;


  $cambiarDatos = cliente:: editDatos($id,$nombre, $apellido, $telefono, $direccion, $provincia, $ciudad, $tipoCons, $avatar);
  $_SESSION["avatar"]=$avatar;
  $_SESSION["nombre"] = $nombre;
  $_SESSION["apellido"] = $apellido;
  $_SESSION["direccion"] = $direccion;
  $_SESSION["telefono"] = $telefono;
  $_SESSION["ciudad"] = $ciudad;
  if ($_SESSION["provincia"]!='') {
    $_SESSION["provincia"];
  } else {
    $_SESSION["provincia"] = $provincia;
  }
  if ($_SESSION["tipoCons"]!='') {
    $_SESSION["tipoCons"];
  } else {
    $_SESSION["tipoCons"] = $tipoCons;
  }


}


// var_dump($_POST);
// echo "<br>";
// var_dump($_SESSION);


?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <?php require_once 'head.php' ?>
</head>

<body>
  <!--Inicio header-->
  <?php require_once 'header.php' ?>

  <div class="container-fluid pb-5" id=fondoMiCuenta>
    <br>
    <div class="container-fluid pt-5 pb-5 rounded" id=micuenta>
      <div class="container-fluid">
        <div class="row">
          <!-- columna izquierda -->
          <div class="col-md-3 pb-3">
            <div class="col-md-12 text-center">
              <h3><?=$_SESSION["username"]?></h3>
            </div>
            <div class="text-center">
              <?php if (!empty($_SESSION["avatar"])):?>
              <!--mostrarAvatar()-->
              <img src="img/avatars/<?=$_SESSION["avatar"]?>" class="avatar rounded-circle img-thumbnail border border-dark" alt="avatar" style="width: 150px; height: 150px">
              <?php else: ?>
              <img src="img/avatars/avatar_2x.png" class="avatar rounded-circle img-thumbnail" alt="avatar" style="width: 150px; height: 150px">
              <?php endif; ?>
            </div>
          </div>
          <!-- fin columna izquierda -->

          <div class="col-md-9">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tus datos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#pedidos" role="tab" aria-controls="profile" aria-selected="false">Modificar datos</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <form>
                  <div class="form-row">
                    <div class="form-group col-lg-6">

                      <label for="inputAddress">Nombre</label>

                      <h5  id="username"> <?=$_SESSION["nombre"]?></h5>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="inputAddress">Apellido</label>
                      <h5  id="apellido"> <?=$_SESSION["apellido"]?></h5>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="inputphone">Teléfono</label>
                      <h5  id="telefono"> <?=$_SESSION["telefono"]?></h5>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="inputEmail4">email</label>
                      <h5  id="email"> <?=$_SESSION["email"]?></h5>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="provincia">Provincia</label>
                      <h5  id="provincia"> <?=$_SESSION["provincia"]?></h5>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="ciudad">Ciudad</label>
                      <h5  id="ciudad"> <?=$_SESSION["ciudad"]?></h5>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="direccion">Dirección</label>
                      <h5  id="direccion"> <?=$_SESSION["direccion"]?></h5>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="tipoCons">Tipo de Cliente</label>
                      <h5  id="tipoCons"> <?=$_SESSION["tipoCons"]?></h5>
                    </div>
                    <div class="col-lg-6"></div>
                    <div class="form-group col-lg-6">
                    <a href="recuperar.php" class="btn btn-danger" > Modificar contraseña </a>

                    </div>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="pedidos" role="tabpanel" aria-labelledby="profile-tab">
              <form method="post" enctype="multipart/form-data" name='formulario'>
                  <div class="form-row">
                    <div class="form-group col-lg-6">
                      <label for="nombre">Nombre</label>
                      <input name = "nombre" type="text" class="form-control" id="nombre" placeholder="Ej: Tony" value="<?=$_SESSION["nombre"]?>">
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="apellido">Apellido</label>
                      <input name = "apellido" type="text" class="form-control" id="apellido" placeholder="Ej: Stark" value="<?=$_SESSION["apellido"]?>">
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="telefono">Teléfono</label>
                      <input name = "telefono" type="tel" class="form-control" id="telefono1" placeholder="Ej: 351-7832514" value="<?=$_SESSION["telefono"]?>">
                    </div>

                    <div class="form-group col-lg-6">
                      <label for="provincia">Seleccione su provincia</label>
                      <select type="text" name="provincia" class="form-control" id="provincia">
                        <option value="">seleccione...</option>
                        <?php
                        foreach ($provincias as $key => $fila) {
                            $sel = '';
                            if($fila['id'] == $provincias['id'])
                                $sel = 'selected';
                            ?>
                            <option value="<?php echo $fila['nombre'];?>" <?php echo $sel;?>><?php echo $fila['nombre'];?></option>
                        <?php
                      }
                          ?>
                      </select>
                    </div>

                    <div class="form-group col-lg-6">
                      <label for="ciudad">Ciudad</label>
                        <input type="text" name="ciudad" class="form-control" placeholder="Ej: Villa Allende" value="<?=$_SESSION["ciudad"]?>">

                    </div>

                    <div class="form-group col-lg-6">
                      <label for="direccion">Dirección</label>
                      <input name = "direccion" type="text" class="form-control" id="direccion" placeholder="Ej: La Rioja 532" value="<?=$_SESSION["direccion"]?>">

                    </div>
                    <div class="form-group col-lg-6">
                      <label for="tipoCons">Seleccione su condicion</label>
                      <select name = "tipoCons" class="form-control" id="tipoCons">
                        <option value="">seleccione...</option>
                        <?php
                            foreach ($tipoConsumidor as $key => $fila) {
                              $sel = '';
                              if($fila['id'] == $tipoConsumidor['id'])
                                $sel = 'selected';
                            ?>
                            <option value="<?php echo $fila['nombre'];?>" <?php echo $sel;?>><?php echo $fila['nombre'];?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="avatar">Cambia tu avatar</label>
                      <input type="file" class="form-control-file" id="cargaAvatar" name="avatar" accept= "image/*">
                      <?php
                      if (isset($erroresEnAvatar["avatar"])) {
                        foreach ($erroresEnAvatar["avatar"] as $error) {
                          echo '<small class = "text-danger">' . $error . '</small><br>';
                        }
                      } else {
                        echo "";
                      }
                      ?>
                    </div>
                    <div class="col-xs-12 col-md-6 pb-3">
                      <button class="btn btn-md btn-success" type="submit"><i class="icon ion-md-checkbox"></i> Guardar </button>
                      <button class="btn btn-md" type="reset"><i class="icon ion-md-refresh"></i> Limpiar</button>
                    </div>

                  </div>
                </form>
              </div>

                  </div>
                </form>
              </div>
            </div>
          </div><!-- fin columna derecha -->
        </div>
        <!--/row-->
      </div>
      <!--Div micuenta-->
    </div>
    <!--fondo-->

  </div>



  <!-- Desarrolado por -->
  <footer>
    <?php require 'footer.php' ?>
  </footer>
  <!-- Fin del Footer -->
  <!-- Optional JavaScript -->
  <?php require_once 'scripts.php' ?>

</body>

</html>
