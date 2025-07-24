<?php
echo "<h1>Encriptado de contraseñas en PHP</h1>";
$clave = "holamundo2025";
$clave_numeros_letras = md5($clave);
$clave_numeros_letras02 = sha1($clave);
$claves_has = hash("md5", $clave);
$clave_xxh32 = hash("ripemd256", $clave_numeros_letras);
echo "<br>";
echo $clave;
echo "<br>";
echo $clave_numeros_letras;
echo "<br>";
echo $clave_numeros_letras02;
echo "<br>";
echo $claves_has;
echo "<br>";
echo $clave_xxh32;


echo "<ul>";
foreach (hash_algos() as $algoritmos) {
    echo "<li> $algoritmos </li>";
}
echo "</ul>";
echo "<h2>FUNCION PASSWORD HAS</h2>";
$contrasenia = "holamundo";
$contrasenia_encriptada = password_hash($contrasenia,PASSWORD_DEFAULT);
echo "<br>";
echo $contrasenia_encriptada;

// para verificar si clave es falsa
echo "<br>";
$verificar = password_verify($contrasenia,$contrasenia_encriptada);
echo "Son iguales: ".$verificar;