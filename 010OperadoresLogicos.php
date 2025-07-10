<?php
echo "<h1>Operadores de Comparacion.</h1>";

$numero_1 = 3;
$numero_2 = "3";

//compara por valor y no por tipo de dato
echo var_dump($numero_1 == $numero_2);
echo "<br>";

//compara el tipo de dato y valor
echo var_dump($numero_1 === $numero_2);
echo "<br>";

echo var_dump(2 != "2");
echo "<br>";

echo var_dump(2 !== "2");
echo "<br>";
echo var_dump(1 > 2);
echo "<br>";

echo var_dump(1 < 2);
echo "<br>";

echo var_dump(1 >= 1);
echo "<br>";

echo var_dump(2 <= 2);
echo "<br>";