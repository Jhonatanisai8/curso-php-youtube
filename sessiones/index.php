<?php
//creamos la sesion
session_name("LOGIN");
//session_id("0SES");
session_start();
//verifixamos si esta definida y no es nula

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Sesion</title>
</head>
<body>
<!--<h5>-->
<!--    --><?php
//    echo "Nombre de sesion: " . $_SESSION['contador'];
//    ?>
<!--</h5>-->
<form action="login.php" method="post">
    <div>
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario">
    </div>
    <div>
        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <button type="submit">LOGIN</button>
    </div>
</form>
</body>
</html>