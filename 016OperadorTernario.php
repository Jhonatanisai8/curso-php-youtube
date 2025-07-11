<?php
echo "<h1>Operador Ternario en PHP</h1>";
//ejemplo
$edad = 18;
$mensaje = "";
($edad >= 18) ? $mensaje = "Eres mayor de edad." : $mensaje = "Eres menor de edad.";

echo "<br>";
echo $mensaje;