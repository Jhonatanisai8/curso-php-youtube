<?php
$nombre  = $_POST['nombre'];
$asignatura =  $_POST['asignatura'];
$fruta = $_POST['frutas'];
$lenguaje = $_POST['lenguaje'];
$profesiones = $_POST['profesiones'];
echo "<h2>Datos Recibidos</h2>";
echo "<ul>";
echo "<li>$nombre</li>
<li>$asignatura</li>
<li>$fruta</li>";
echo "</ul>";
echo "<br>";
echo "<h3>Lenguajes de programacion</h3>";
foreach ($lenguaje as $valor) {
    echo "<li>$valor</li>";
}
echo "<br>";
echo "<h3>Profesiones Preferidas</h3><ul>";
foreach ($profesiones as $value) {
    echo "<li>$value</li>";
}
