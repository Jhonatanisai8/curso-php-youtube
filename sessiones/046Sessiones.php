<?php
//creamos una sesion
session_name("LOGIN");
//session_id("0SES");
session_start();
/*
$nombre_sesion = session_name();
$id_sesion = session_id();
if (isset($_SESSION['contador'])) {
    $_SESSION['contador']++;
} else {
    $_SESSION['contador'] = 1;
}
 */
?>
<!doctype html >
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http - equiv="X-UA-Compatible" content="ie=edge">
    <title> Sesiones en PHP </title>
</head>
<body>
<h1> Sesiones en PHP </h1>
<div>
    <h2>
        <?php
        echo "Hola: " . $_SESSION["Nombre"] . $_SESSION["Apellido"];
        ?>
    </h2>
    <!--    <h2>-->
    <!--        --><?php
    //        echo "Id de sesion: $id_sesion";
    //        ?>
    <!--    </h2>-->
    <!--    <h2>-->
    <!--        --><?php
    //        echo "Nombre de sesion: " . $_SESSION['contador'];
    //        ?>
    <!--    </h2>-->
</div>
<div>
    <a href="index.php">Inicio</a>
</div>
<div>
    <a href="048Cerrar.php">Eliminar Sesion</a>
</div>
</body>
</html>