<?php





$usuariosRegistrados = file_get_contents("usuarios.json");
$usuariosRegistrados = explode(PHP_EOL, $usuariosRegistrados);
array_pop($usuariosRegistrados);


var_dump($usuariosRegistrados);


echo "<br>";
echo "<br>";
echo "<br>";

$usuarioDecode = json_decode($usuariosRegistrados, true);

var_dump($usuariosDecode);



/*foreach ($usuario1 as $usuario) {
    $usuarioDecode = json_decode($usuario, true);
}
    var_dump($usuario);

    /*if ($_POST["email"] == $usuarioDecode["email"]) {
        if (password_verify($_POST["password"], $usuarioDecode["password"])) {

            $usuarioNuevo = [
                "username" => trim($_POST["username"]),
                "email" => trim($_POST["email"]),
                "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
                "apellido" => trim($_POST["apellido"]),
                "direccion" => trim($_POST["direccion"]),
                "ciudad" => trim($_POST["ciudad"]),
                "telefono" => trim($_POST["telefono"]),
                "avatar" => $nombreAvatar2,
            ];

        }

    }*/


    





?>
