<?php
echo  "<h1>VALIDAR VARIABLES EN PHP</h1>";
$numero = 6;
$nombre = "";
// para eliminar la variable 
echo  "<h2>Uso de la funcion 'unset' </h2>";
// unset($numero);
if (is_null($numero)) {
    echo "<p>La variables es nula</p>";
} else {
    echo "<p>La variables no es nula</p>";
    echo "<br>";
    echo $numero;
}
echo "<br>";

echo  "<h2>Uso de la funcion 'empty' </h2>";
if (empty($nombre)) {
    echo "<p>La variable esta vacia.</p>";
} else {
    echo "<p>La variable no esta vacia.</p>";
    echo "<br>";
    echo $nombre;
}
