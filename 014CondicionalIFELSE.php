<?php
echo "<h1>Condional IF-ELSE</h1>";
const USUARIO = "jhonatan";
const PASSWORD = "jhonatan123";

$user = "jhonatan";
$pass = "jhonatan123";

if ($user === USUARIO && $pass === PASSWORD) {
    echo "Bienvenido al sistema";
} else {
    echo "Credenciales incorrectas";
}


