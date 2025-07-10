<?php
echo "<h1>Operadores Asignacion en PHP</h1>";

$numero_a = 6;
$numero_b = 4;

$suma = $numero_a + $numero_b;
echo "La suma es: " . $suma;
echo "<br>";

$suma += 10;
echo "Le sumamos 10";
echo "<br>";
echo "Valor de la variable suma: $suma";
echo "<br>";

$suma -= 5;
echo "Le quitamos 5";
echo "<br>";
echo "Valor de la variable suma: $suma";
echo "<br>";

$suma *= 5;
echo "Le multiplicamos por 5";
echo "<br>";
echo "Valor de la variable suma: $suma";
echo "<br>";

$suma /= 5;
echo "Le dividimos por 5";
echo "<br>";
echo "Valor de la variable suma: $suma";
echo "<br>";
$suma++;
echo "Valor de la variable suma: $suma";
?>
