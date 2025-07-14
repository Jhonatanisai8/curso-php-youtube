<?php
/*
 * Se desea diseñar un programa que escriba los nombres de los dias
 * de la semana en funcion del valor de una variable dia
 */
$dia = 0;
$mensaje = "";
switch ($dia) {
    case 1:
        $mensaje = "Lunes";
        break;
    case 2:
        $mensaje = "Martes";
        break;
    case 3:
        $mensaje = "Miercoles";
        break;
    case 4:
        $mensaje = "Jueves";
        break;
    case 5:
        $mensaje = "Viernes";
        break;
    case 6:
        $mensaje = "Sabado";
        break;
    case 7:
        $mensaje = "Domingo";
        break;
    default:
        $mensaje = "Ingresa una opcion del 1 al 7.";
        break;
}
echo $mensaje;
?>
