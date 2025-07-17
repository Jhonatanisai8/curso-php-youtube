<?php
/*
 * La declaración break puede usarse para salir de un bucle for.
  */
echo "<h2> Uso del Break</h2>";
for ($i = 1; $i <= 10; $i++) {
    echo "Contador " . $i . "<br>";
    if ($i === 2) {
        echo "Se salio del bucle.";
        break;
    }
}

