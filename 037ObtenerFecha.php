<?php
// primeros definimos la zonas horarias para trabajar
date_default_timezone_set("America/Lima");
echo "<h1>OBTENER LA FECHA EN PHP</h1>";
$dia_semana_numero = date("w");
$mes_actual = date("F");
$fecha_usa = date("Y-m-d");
$fecha_peru = date("d/m/Y");
echo "<br>";
echo "Dia de la semana: " . $dia_semana_numero;
echo "<br>";
echo "Mes Actual: " . $mes_actual;
echo "<br>";
echo "Año: " . $fecha_usa;
echo "<br>";
echo date('l jS \of F Y h:i:s A');
echo "<br>";

// ahora obtenemos la hora 
$hora_formato_12 = date("h:i a");
$hora_formato_24 = date("H:i a");

echo "<br>";
echo "Hora de hoy: " . $hora_formato_12;
echo "<br>";
echo "Hora de hoy: " . $hora_formato_24;

// para la fecha completa
$fecha_completa = date("d-m-y h:i A");
$fecha_completa_nombre = date("l d F Y H:i A ");
echo "<br>";
echo "La fecha actual es : $fecha_completa";
echo "<br>";
echo "La fecha actual es : $fecha_completa_nombre";
