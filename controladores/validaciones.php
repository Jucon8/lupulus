<?php

function validarFormulario()
{
    $error = [];
    /*VALIDACION DEL NOMBRE*/
    if (isset($_POST['nombre'])) {
        if (empty($_POST['nombre'])) {
            $error['nombre'][] = "El campo esta vacio";
        }
        if (strlen($_POST['nombre']) < 2) {
            $error['nombre'][] = "El nombre  tiene que ser mayor que dos digitos";
        }
    }
    /*VALIDACION DEL EMAIL*/
    if (isset($_POST['email'])) {
        if (empty($_POST['email'])) {
            $error['email'][] = "El campo esta vacio";
        }
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error['email'][] = "Tiene que ser un email valido";
        }
    }
    /*VALIDACION DEL PASSWORD*/
    if (isset($_POST['password'])) {
        if (empty($_POST['password'])) {
            $error['password'][] = "El campo esta vacio";
        }
        if (strlen($_POST['password']) < 6) {
            $error['password'][] = "Tu contrseña tiene que tener mas de 6 digitos";
        }
    }
    /*VALIDACION DEL RE_PASSWORD*/
    if (isset($_POST['confirm-password'])) {
        if (empty($_POST['confirm-password'])) {
            $error['confirm-password'][] = "El campo esta vacio";
        }
        if ($_POST['password'] != $_POST['confirm-password']) {
            $error['confirm-password'][] = "La contraseña no son iguales";
        }
    }

    return $error;
}
function persistirDatos($datos, $errores)
{
    if (isset($errores[$datos])) {
        return "";
    } else {
        if(isset($_POST[$datos])){
            return $_POST[$datos];
        }
    }
}
