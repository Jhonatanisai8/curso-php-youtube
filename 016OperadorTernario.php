<?php
echo "<h1>Operador Ternario en PHP</h1>";
//ejemplo
$edad = 18;
$mensaje = "";
($edad >= 18) ? $mensaje = "Eres mayor de edad." : $mensaje = "Eres menor de edad.";

$vivo_en = "Piura";
$mensaje_de = "";
($vivo_en === "Lima") ? $mensaje_de = "eres de lima." : $mensaje_de = "eres de otro lugar.";

echo "<br>";
echo $mensaje;

echo "<br>";
echo $mensaje_de;