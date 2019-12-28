<?php

session_start();
session_destroy();

// setcookie("usuarioEmail", null, time()- 1); //
// setcookie("usuarioPassword", null, time()- 1); //

header("Location: iniciarsesion.php")

 ?>
