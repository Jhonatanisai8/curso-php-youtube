<?php
echo "<h1>Formatear Numeros</h1>";

$cantidad_1 = 1239393.897;
$cantidad_2 = 1245.42;

$numero_formateado = number_format($cantidad_1,2);
echo "Numer formateado: " . $numero_formateado;
