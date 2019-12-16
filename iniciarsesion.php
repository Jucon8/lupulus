<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<?php include("head.php")?>


		<title>Iniciar Sesión</title>
	</head>
	<body>
		    <main>
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
						<!--Inicio de LOGIN -->
						<div class="container-fluid loginimg pt-5">

								<div class="col-sm-9 col-md-6 col-lg-5 rounded bg-white pt-1 pb-3" id="formulario">
									<div class="text-center">
										<h2 class="p-3">iniciar sesión</h2>
									</div>
									<form class="container col-md-9 col-lg-12" method="POST"  action="#LOGIN" id="login-form">
								   <div class="form-group">
								     <input type="text" name="username" id="username-inicio" tabindex="1" class="form-control" placeholder="Usuario" value="">
								   </div>
								   <div class="form-group">
								     <input type="password" name="password" id="password-inicio" tabindex="2" class="form-control" placeholder="Contraseña">
								   </div>
								   <div class="form-group form-check text-center">
										 <input type="checkbox" tabindex="3" class="form-check-input" name="remember" id="remember">
								     <label class="form-check-label" for="remember">Recordarme</label>
								   </div>
									 <div class="text-center pb-3">
										 <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="col-lg-6 form-control btn btn-login" value="Iniciar sesión">
									 </div>
									 <div class="text-center">
										 <a href="#RECUPERARCONTRASEÑA" tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
									 </div>
								 </form>
								</div>
							</div>
				</main>

		<footer>
			<?php include("./desarroladoPor.php")?>
		</footer>
		<?php include_once("scripts.php") ?>
	</body>
</html>
