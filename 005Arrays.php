<?php
//ejemplo de creacion de un arreglo

//ARRAY DE TIPO ESCALAR
$carros = array("Toyota", "Volvo", "BMW", "Audi");
$carros[0] = "Nissan";

$tamanioArray = count($carros);

echo "<br>";
echo "Tamaño del array: " . $tamanioArray;
echo "<br>";
echo "Valor del array en la posicion 0 " . $carros[0];


//TIPO DE ARRAYS ASOCIATIVO
$tutor = [
    "nombre" => "Jhonatan",
    "apellidos" => "Alejandro",
    "edad" => 25];
echo "<br>";
echo "Valor del array en la posicion 0 " . $tutor["nombre"];

//TIPO DE ARRAY MULTIPLES DIMENSIONES
$tutor = [
    "nombre" => "Jhonatan",
    "apellidos" => "Alejandro",
    "edad" => 25,
    "lenguajes" => [
        "Java" => "Java",
        "PHP" => "PHP",
        "Python" => "Python",
        "Python2" => "Python2"
    ]
];
echo "<br>";
echo $tutor["nombre"];
echo "<br>";
echo $tutor["lenguajes"];
echo "<br>";
echo $tutor["lenguajes"]["Java"];
echo "<br>";
echo count($tutor);
?>;
