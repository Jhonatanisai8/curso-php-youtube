<?php
/*
 * Diseña un programa que imprima los numeros del 1 al 20
 * (incremento y decremento)
 */
echo "<h2> NUMEROS DEL 1 AL 20</h2>";

for ($contador = 1; $contador <= 20; $contador++) {
    echo "Contando $contador <br>";
}

echo "<h2> NUMEROS DEL 20 AL 1</h2>";
for ($i = 20; $i >= 1; $i--) {
    echo "Contador " . $i . "<br>";
}
