<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir o Enviar Archivos PHP</title>
    <style>
        /* --- Estilos Generales --- */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5; /* Fondo suave */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* --- Contenedor del Formulario --- */
        form {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* --- Título H3 --- */
        h3 {
            color: #333;
            margin-bottom: 25px;
            font-size: 1.5em;
        }

        /* --- Estilos para el Input de Archivo --- */
        input[type="file"] {
            display: block;
            width: 100%;
            margin-bottom: 25px;
        }

        /* Estilo del botón del selector de archivos (navegadores modernos) */
        input[type="file"]::file-selector-button {
            font-weight: bold;
            color: #fff;
            background-color: #5a67d8; /* Un tono de azul/morado */
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }

        input[type="file"]::file-selector-button:hover {
            background-color: #434190;
        }

        /* --- Botón de Envío --- */
        button[type="submit"] {
            background-color: #28a745; /* Verde éxito */
            color: white;
            font-size: 1em;
            font-weight: bold;
            border: none;
            padding: 12px 20px;
            width: 100%;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }

        button[type="submit"]:hover {
            background-color: #218838; /* Verde más oscuro al pasar el cursor */
        }
    </style>
</head>
<body>
<h3>Subir Archivos con PHP</h3>
<form action="carga.php" method="post" enctype="multipart/form-data">
    <div>
        <input type="file" name="fichero">
    </div>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>
</body>
</html>