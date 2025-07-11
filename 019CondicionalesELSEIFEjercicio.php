<?php
echo "<h1>EJERCICIO 02 DE CONDICIONALES</h1>";

/*
 * en una fabrica de computadoras se planea ofrecer a los clientes un
 * descuento que dependera del numero de computadoras que compre.
 * Si las computadoras son menos de cinco se les dara un 10% de descuento
 * sobre el total de la compra; si el numero de computadoras es mayor
 * o igual a cinco pero menos de diez se le otorgan un 20% de
 * descuento o mas se les da un 40% de descuento. El precio de cada
 * computadora es de $.700
 */
$numero_computadores = 5;
$precio_computadora = 700;
$total_pagar = $numero_computadores * $precio_computadora;
const DESCUENTO_10 = 0.10;
const DESCUENTO_20 = 0.20;
const  DESCUENTO_40 = 0.40;
if ($numero_computadores < 5) {
    $total_pagar -= $total_pagar * DESCUENTO_10;
} else if ($numero_computadores >= 5 && $numero_computadores < 10) {
    $total_pagar -= $total_pagar * DESCUENTO_20;
} else{
    $total_pagar -= $total_pagar * DESCUENTO_40;
}

echo "<br>";
echo "Numero de Computadores: " . $numero_computadores;
echo "<br>";
echo "Precio del Computadora: " . $precio_computadora;
echo "<br>";
echo "Total Pagar: " . $total_pagar;
?>
