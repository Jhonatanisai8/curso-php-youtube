<?php
echo "<h1>Funciones matematicas en PHP</h1>";
$numero = 4;
$exponente = 2;
$potencia = pow($numero, $exponente);
$raiz_cuadrada = sqrt($numero);
$numero_aleatorio = rand(1, 10);
$num = 3.5;
$num_01 = 3.2;
$numero_redondeado = round($num);
$numero_redondeado_01 = floor($num);
echo $potencia;

echo "<br>";
echo "Valor de PI: " . pi();
echo "<br>";
echo "Raiz Cuadrada de " . $numero . " es: " . $raiz_cuadrada;
echo "<br>";
echo "Numero aleatorio entre 0 y 10 es: " . $numero_aleatorio;
echo "<br>";
echo "Numero redondeado de " . $num . " es " . $numero_redondeado;
echo "<br>";
echo "Numero redondeado de " . $num_01 . " es " . $numero_redondeado_01;
