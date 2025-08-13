<?php
if ($_POST['usuario'] == "Jhonatan" &&
    $_POST['password'] == "admin123") {
    session_name("LOGIN");
    session_start();
    $_SESSION["Nombre"] = "Jhonatan";
    $_SESSION["Apellido"] = "Elias";
    $_SESSION["Pais"] = "Perú";
    echo "Sesion Iniciada";
} else {
    echo "Datos incorrectos";
}