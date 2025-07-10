<?php
/*Reliza un programa en donde se pida la edad del usuario
si es mayor de edad debe aparecer un mensaje indicandolo*/
$edad = 18;
if ($edad >= 18) {
    echo "Es menor que 18";
}

/*
 en un almacen se hace un 20% de descuento a los clientes cuya compra
supera los $100 ¿Cual sera la cantidad que paga una persona por su
compra?
 */

echo "<br>";
$monto_compra_cliente = 100;
if ($monto_compra_cliente >= 100) {
    $descuento = 0.20;
    $monto_final = $monto_compra_cliente - ($monto_compra_cliente * $descuento);
    echo "El descuento es $monto_final";
}