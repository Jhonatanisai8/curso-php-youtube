<?php
/*
 * Diseña un programa que imprima los numeros del 1 al 20
 * (incremento y decremento)
 */

$contador = 0;
do {
    echo "Contando $contador <br>";
    $contador++;
} while ($contador <= 20);

/*
 * Hacer la tabla de multiplicar dada un numero
 */
echo    "<h1>Tabla de multilicar.</h1>";
$numero = 3;
$multiplicador = 0;
do {
    echo $numero . " X " . $multiplicador . " = " . ($multiplicador * $numero) . "<br>";
    $multiplicador++;
} while ($multiplicador <= 12);
?>;

