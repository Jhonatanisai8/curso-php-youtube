<?php
//echo $_FILES['fichero']['name'] . "<br>";
//echo $_FILES['fichero']['tmp_name'] . "<br>";
//echo $_FILES['fichero']['type'] . "<br>";
//echo $_FILES['fichero']['error'] . "<br>";
//echo $_FILES['fichero']['size'] . "<br>";
if (!file_exists("archivos_guardados")) {
    //creamos el directorio en caso no se encuentre
    if (!mkdir("archivos_guardados", 0777)) {
        echo "Error al crear el directorio";
        exit();
    }
}
chmod("archivos_guardados", 0777);

if (move_uploaded_file($_FILES['fichero']['tmp_name'],
    "archivos_guardados/" . $_FILES['fichero']['name'])) {
    echo "Archivo guardado";
} else {
    echo "Error al subir el archivo o cualquier otro archivo";
}