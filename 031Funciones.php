<?php
echo "<h2>Funciones en PHP </h2>";

function saludar()
{
    echo "Saludando desde una funcion";
}

function saludar_nombre($nombre)
{
    echo "Hola Como estas $nombre";
}

function saludo_con_nombre_edad($nombres, $edad)
{
    if ($edad == 0 or $edad == null) {
        echo "Se ah enviando el nombre pero no la edad";
    } else {
        echo "Hola $nombres tienes $edad";
    }
}

function saludar_edad($edad)
{
    $proxima_edad = $edad + 1;
    return "Tienes $edad y el proximo año vas a cumplir $proxima_edad";
}

function calcular_factorial_numero($numero)
{
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial = $factorial * $i;
    }
    return $factorial;
}

function mostrar_100_factoriales()
{
    echo "<ul>";
    for ($i = 1; $i <= 100; $i++) {
        echo "<li>Factorial de" . $i . "=" . calcular_factorial_numero($i) . "</li>";
    }
    echo "</ul > ";
}

saludar();
echo "<hr > ";
saludar_nombre("Jhonatan");
echo " < hr>";
saludo_con_nombre_edad("Jhonatan", null);
echo " < hr>";
echo saludar_edad(34);
echo " < hr>";
echo "<h2>Factoriales de los 100 primeros numeros.</h2>";
mostrar_100_factoriales();
?>