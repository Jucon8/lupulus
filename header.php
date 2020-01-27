
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark " tyle="background-color: #000;">
    <a class="navbar-brand p-0 pt-2" href="index.php" style="background-color: transparent; width:15%; box-shadow: none;">
    <img src="img/logo1.png" alt="LUPULUS" id=logoHeader></a>
    <button class="navbar-toggler" id="menuHeader" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        MENU<span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" style="text-transform: capitalize" href="index.php#nosotros">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" style="text-transform: capitalize" href="index.php#preguntas">FAQs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" style="text-transform: capitalize" href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" style="text-transform: capitalize" href="index.php#contacto">Contacto</a>
            </li>
        </ul>
        <ul class="navbar-nav">

          <li class="nav-item dropdown">
            <?php if(isset($_SESSION["id"]) && $_SESSION["rol_id"]=='2'):?>
           <a class="nav-link dropdown-toggle text-white" style="text-transform: capitalize" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?=$_SESSION["username"]?> <?php if (!empty($_SESSION["avatar"])):?> <img src="img/avatars/<?=$_SESSION["avatar"]?>" class="avatar rounded-circle img-thumbnail" id="avatarHeader" style="width:30px; height:30px" alt="avatar">
          <?php else: ?>
          <img src="img/avatars/avatar_2x.png" class="avatar rounded-circle" alt="avatar" id="avatarHeader" style="width:30px; height:30px">
          <?php endif; ?>
           </a>
           <div class="dropdown-menu dropdown-open" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" style="text-transform: capitalize" href="micuenta.php">Mi cuenta</a>
             <a class="dropdown-item text-danger" style="text-transform: capitalize" href="logout.php"> Cerrar sesión </a>
           </div>
           <?php endif;?>

           <li class="nav-item dropdown">
             <?php if(isset($_SESSION["id"]) && $_SESSION["rol_id"]=='1'):?>
            <a class="nav-link dropdown-toggle text-white" style="text-transform: capitalize" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <?=$_SESSION["username"]?> <?php if (!empty($_SESSION["avatar"])):?> <img src="img/avatars/<?=$_SESSION["avatar"]?>" class="avatar rounded-circle img-thumbnail" id="avatarHeader" style="width:30px; height:30px" alt="avatar">
           <?php else: ?>
           <img src="img/avatars/avatar_2x.png" class="avatar rounded-circle" alt="avatar" id="avatarHeader" style="width:30px; height:30px">
           <?php endif; ?>
            </a>
            <div class="dropdown-menu dropdown-open" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" style="text-transform: capitalize" href="admin.php">Panel de Control</a>
              <a class="dropdown-item" style="text-transform: capitalize" href="micuenta.php">Mi cuenta</a>
              <a class="dropdown-item text-danger" style="text-transform: capitalize" href="logout.php"> Cerrar sesión </a>
            </div>
            <?php endif;?>

           <?php if(!isset($_SESSION["id"])):?>
           <a class="nav-link dropdown-toggle text-white" style="text-transform: capitalize" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             mi cuenta
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="miCuentaHeader">
             <a class="dropdown-item" style="text-transform: capitalize" href="iniciarsesion.php">Ingresar</a>
             <a class="dropdown-item" style="text-transform: capitalize" href="registrarse.php">Registrarse</a>
           </div>
           <?php endif;?>
            <li class="nav-item">
                <a class="nav-link text-white" style="text-transform: capitalize" href="carrito.php" id="carritoHeader">
                    <i class="icon ion-md-cart"></i> carrito</a>
            </li>

        </ul>
    </div>
</nav>
