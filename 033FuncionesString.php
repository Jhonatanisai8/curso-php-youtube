<?php
echo "<h1>Funciones String predefinidas en PHP</h1>";
$mi_nombre = "jhonatan isai";
$mi_nombre_minusculas = strtolower($mi_nombre);
$mi_nombre_mayusculas = strtoupper($mi_nombre);
$primera_letra_minuscula = ucfirst($mi_nombre);
$primera_letra_mayuscula = ucwords($mi_nombre);
echo $mi_nombre_minusculas;
echo "<br>";
echo $mi_nombre_mayusculas;
echo "<br>";
echo $primera_letra_mayuscula;
echo "<br>";
echo $primera_letra_minuscula;
echo "<br>";


$cadena_texto = "hola mundo";
$tamanio_cadena = strlen($cadena_texto);
echo "La cadena de texto tiene: " . $tamanio_cadena;
echo "<br>";

$palabras = str_word_count($cadena_texto);
echo $cadena_texto . " tiene: " . $palabras . " }
palabras.";
echo "<br>";

$mi_parrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui magnam rerum doloremque itaque exercitationem sint beatae iure voluptatibus, aliquid cum illum nobis corporis debitis consequuntur. Illum aliquam nemo ut odit.";
$palabras_parrafo = str_word_count($mi_parrafo);

echo "El parrafo tiene " . $palabras_parrafo . " palabras.";
