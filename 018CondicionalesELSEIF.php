<?php
/*
 * Se desea diseñar un programar que escriba los nombres de los dias de la
 * semana del valor de una variable DIA.
 */

$dia = 5;
$dia_semana = "";
if ($dia == 1) {
    $dia_semana = "Domingo";
} else if ($dia == 2) {
    $dia_semana = "Lunes";
} else if ($dia == 3) {
    $dia_semana = "Martes";
} else if ($dia == 4) {
    $dia_semana = "Miercoles";
} else if ($dia == 5) {
    $dia_semana = "Jueves";
} else if ($dia == 6) {
    $dia_semana = "Viernes";
} else if ($dia == 7) {
    $dia_semana = "Sabado";
} else {
    $dia_semana = "Por favor ingrese un valor entre 1 y 7";
}

echo "<br>";
echo "Dia: $dia";
echo "<br>";
echo "DIA SEMANA: $dia_semana";
