<?php
/*
 * La declaración continue detiene la iteración
 * actual en el bucle for y continúa con la siguiente.
 */
echo "<h2>Uso del Continue </h2>";
for ($i = 0; $i < 30; $i++) {
    if ($i === 12) {
        continue;
    }
    echo $i . " => " . $i . "<br>";
}
?>;
