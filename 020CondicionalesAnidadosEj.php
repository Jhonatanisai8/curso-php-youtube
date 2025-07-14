<?php

/*
 * pida a usuario la edad y el genero, para que la computadora
 * le indique si ya puede jubilarse. Tome en cuenta que un hombre
 * se peude jubilar cuando tenga 60 años o mas, en cambio, una mujer
 * mayor se jubilara si tiene
 * mas de 54 años.
 */

$edad = 34;
$genero = "Masculino";

if ($genero === "Masculino") {
    if ($edad >= 60) {
        echo "Ya se puede jubilar.";
    } else {
        echo "Aun no cuenta con la edad suficiente para jubilarse.";
    }
} else if ($genero === "Femenino") {
    if ($edad >= 54) {
        echo "Ya se puede jubilar.";
    }
} else {
    echo "Por favor seleccione una opcion de genero valida";
}

echo "<br>";
echo "Genero: " . $genero;
echo "<br>";
echo "Edad: $edad";

