<?php
//creamos una cookie
/*setcookie("Nombre",
    valor,
    expiracion,
    dir,
    dominio,
    secure,
    httponly);*/
setcookie("Idioma",
    "es",
    time() + 60 * 60 * 24 * 30,
    "/",
    false,
    true);
setcookie("Pais",
    "Peru")
?>
<!doctype html >
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http - equiv="X-UA-Compatible" content="ie=edge">
    <title> Manejo de Cookies en PHP </title>
</head>
<body>
<h1> Manejo de Cookie con PHP </h1>
<h2>
    <!--    mostramos el valor de cookie-->
    <?php
    echo $_COOKIE['Idioma'];
    echo $_COOKIE['Pais'];
    ?>
</h2>
</body>
</html>