<?php
session_name("LOGIN");
session_start();
session_destroy();
/*
- para eliminar solo las variables
session_unset();

- para eliminar solo un variable determinada
unset($_SESSION["Nombre"]);
 */
if (headers_sent()) {
    echo "<script>window.location.href='index.php'</script>";
} else {
    //para redireccionar a otra pagina
    header('Location: index.php');
}