<?php
echo "<h1>Operador logicos en php.</h1>";

//and
//or
//!
//&&
//||

$user = "admin";
$contrasenia = "admin123";

$ejemplo_and = $user === "admin" && $contrasenia === "admin123";
$ejemplo_or = $user === "admin" || $contrasenia === "admin123";

echo var_dump($ejemplo_and);
echo "<br>";
echo var_dump($ejemplo_or);