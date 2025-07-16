<?php
echo "<h1> ESTRUCTURA de SELECCION MULTIPLE MATCH </h1>";
$variale_a = 4;
$variale_b = 3;
$variale_c = 9;
$variale_d = 6;

$resultado = match ($variale_c) {
    $variale_c => "Valor igual a 9",
    $variale_d => "Valor igual a 6",
    default => "Ningun valor coincide.",
};

echo $resultado;
?>
