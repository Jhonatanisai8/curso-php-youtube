<?php
/*
 * Hacer un programa que calcule el total a pagar por la compra de camisas.
 * Si se comprar tres camisas o mas se aplican un descuento del 20% sobre
 * el total de la compra y si son menos de tres camisas un descuento
 * del 10%.
 */
$total_pagar = 0;
const DESCUENTO_20 = 0.20;
const DESCUENTO_10 = 0.10;

$numero_camisas = 2;
$precio_camisa = 20;
$total_pagar = $numero_camisas * $precio_camisa;

($numero_camisas >= 3)
    ?
    $total_pagar -= $total_pagar * DESCUENTO_20
    :
    $total_pagar -= $total_pagar * DESCUENTO_10;
echo "<br>";
echo $total_pagar;