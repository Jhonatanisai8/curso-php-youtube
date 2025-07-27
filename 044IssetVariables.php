<?php
$numero_recibido = $_POST['numero'];

// if (isset($numero_recibido) && $numero_recibido !== "") {
    echo "Valor de la variable es " . $numero_recibido;
    echo "<br>";
    echo "SU TABLA DE MULTIPLICAR ES: ";
    echo "<ul>";
    for ($i = 0; $i <= 12; $i++) {
        echo "<li>" . $i . " X " . ".$numero_recibido." . " = " . $i * $numero_recibido . "</li>";
    }
    echo "</ul>";
// } else {
    // echo "La variable no esta definida";
// }
