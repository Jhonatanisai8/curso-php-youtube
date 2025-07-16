<?php
/*
 * Diseña un programa que imprima los numeros del 1 al 20
 * (incremento y decremento)
 */
$contador = 1;
while ($contador <= 20) {
    echo "Contando $contador <br>";
    $contador++;
}
/*
 * Diseñe un programa que imprima la tabla de multiplicar de un
 * numero dado, desde el factor 1 hasta el 12
 */

$valor_dado = 5;
$multiplicador = 1;
while ($multiplicador <= 12) {
    echo $valor_dado . " X " . $multiplicador . " = " . ($valor_dado * $multiplicador) . "<br>";
    $multiplicador++;
}


?>
