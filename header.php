
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark " tyle="background-color: #000;">
    <a class=" navbar-brand" href="index.php" style="text-transform: uppercase; font-size:2rem; width:300px;"><img src="img/logo1.png" alt="LUPULUS" id=logoHeader></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        MENU<span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto ">
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
                <a class="nav-link text-white" style="text-transform: capitalize" href="tienda-lista.php">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" style="text-transform: capitalize" href="index.php#contacto">Contacto</a>
            </li>
        </ul>
        <ul class="navbar-nav">

      <li class="nav-item dropdown">
        <?php if(isset($_SESSION["email"])):?>
       <a class="nav-link dropdown-toggle text-white" style="text-transform: capitalize" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?=$_SESSION["username"]?>  <img src="img/avatars/<?=$_SESSION["avatar"]?>" class="avatar rounded-circle img-thumbnail" width="30px" height="30px" alt="avatar">
       </a>
       <div class="dropdown-menu dropdown-open" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" style="text-transform: capitalize" href="micuenta.php">mi cuenta</a>
         <a class="dropdown-item text-danger" style="text-transform: capitalize" href="logout.php"> cerrar sesión </a>
       </div>
       <?php endif;?>
       <?php if(!isset($_SESSION["email"])):?>
       <a class="nav-link dropdown-toggle text-white" style="text-transform: capitalize" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         mi cuenta
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" style="text-transform: capitalize" href="iniciarsesion.php">ingresar</a>
         <a class="dropdown-item" style="text-transform: capitalize" href="registrarse.php">registrarse</a>
       </div>
       <?php endif;?>
            <li class="nav-item">
                <a class="nav-link text-white" style="text-transform: capitalize" href="carrito.php">
                    <i class="icon ion-md-cart"></i> carrito</a>
            </li>

        </ul>
    </div>
</nav>
