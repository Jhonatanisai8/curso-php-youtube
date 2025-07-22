<?php
echo "<h1>Convertir strings a arreglos.</h1>";
$fecha_01 = "2023/12/9";
$fecha_02 = "2023-12-9";
$numeros = "uno dos tres cuatro cinco seis siete ocho";
echo $fecha_01;
echo "<br>";
$arreglo_numeros = explode(" ", $numeros);
$arreglo_fecha = explode("-", $fecha_02);
echo "Valor de la posicion 1: " . $arreglo_fecha[1];
