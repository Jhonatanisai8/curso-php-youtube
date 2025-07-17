<?php
echo "<h2>EJEMPLO DE USO DE foreach Array normal</h2>";
$colores = array("rojo", "verde", "azul", "naranja", "morado");
foreach ($colores as $color) {
    echo $color . "<br>";
}

echo "<h2>EJEMPLO DE USO DE foreach Array normal</h2>";
$marca_autos = [
    "toyota" => "japon",
    "honda" => "japon",
    "suzuki" => "japon",
    "ducati" => "italia"
];
foreach ($marca_autos as $marca => $pais) {
    echo $marca . " => " . $pais . "<br>";
}
?>;
