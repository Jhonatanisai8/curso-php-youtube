<?php
/*
 * Calcular el total que una persona debe pagar en una llantera, el precio
 * de cada llanta es de $800 si se compran menos de 5 llantas y de $700
 * si se comprar 5 o mas.
 */

$cantidad_llantas_compradas = 6;
const PRECIO_LLANTAS_5 = 800;
const PRECIO_LLANTAS_MAS_5 = 700;

$monto_pagar = 0;
if ($cantidad_llantas_compradas <= 5) {
    echo "Entro aqui 1";
    $monto_pagar = PRECIO_LLANTAS_5 * $cantidad_llantas_compradas;
} else {
    echo "Entro aqui 2";
    $monto_pagar = PRECIO_LLANTAS_MAS_5 * $cantidad_llantas_compradas;
}

echo "Total a pagar: $monto_pagar";