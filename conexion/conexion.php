<?php



   $dsn ="mysql:host=localhost;dbname=lupulus_bd;port=3306";
   $usuario="root";
   $password="";

 try {

            $conexion= new PDO ($dsn,$usuario,$password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
           echo "<script>alert(' conectado..')</script>";
        } catch (PDOException $e) {
            echo "<script>alert('Error ....')</script>";
            
        }
    


?>
           