<?php
echo "<h1>Asignacion por refencia</h1>";
$texto = "Cadena de texto";
echo $texto;
echo "<br>";
$variable_a = $texto;
$variable_b =  &$texto;
echo $variable_a;
$texto = "Cadena de texto update";
echo "<br>";
echo $variable_b;