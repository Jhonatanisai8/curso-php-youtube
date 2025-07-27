<?php
echo  "<h1>VALIDAR VARIABLES EN PHP</h1>";
// RECUPERAMOS LA VARIABLE MEDIANTE EL METODO GET 
$numero = $_GET['numero'];
$nombre = "";
// para eliminar la variable 
echo  "<h2>Uso de la funcion 'isset' </h2>";
// unset($numero);
if (isset($numero)) {
    echo "<p>La variables esta definida</p>";
    echo "<br>";
    echo "<p>$numero</p>";
} else {
    echo "<p>La variables no esta definida</p>";
    echo "<br>";
    echo $numero;
}
echo "<br>";
