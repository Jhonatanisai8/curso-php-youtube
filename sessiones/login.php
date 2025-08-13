<?php
if ($_POST['usuario'] == "Jhonatan" &&
    $_POST['password'] == "admin123") {

    session_name("LOGIN");
    session_start();

    $_SESSION["Nombre"] = "Jhonatan";
    $_SESSION["Apellido"] = "Elias";
    $_SESSION["Pais"] = "Perú";

    //echo "Sesion Iniciada";
    // si hay encabezados enviados
    if (headers_sent()) {
        echo "<script>window.location.href='046Sessiones.php'</script>";
    } else {
        //para redireccionar a otra pagina
        header('Location: 046Sessiones.php');
    }
} else {
    echo "Datos incorrectos";
}