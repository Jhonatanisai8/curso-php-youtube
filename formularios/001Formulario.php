<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        h1 {
            text-align: center;
        }

        body {
            background-color: #444;
            padding: 10% 30%;
        }

        form {
            width: 350px;
            margin: 0 auto;
            background-color: tomato;
            padding: 2rem 1rem;
            border-radius: 2rem;
        }

        div {
            width: 70%;
            margin: 0 auto;
        }

        label {
            font-weight: bold;
            font-size: 1.2rem;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        input {
            width: 100%;
            height: 20px;
            font-family: 1.2rem;
            border-style: none;
            border-image: none;
            border-color: white;
            font-family: 'Times New Roman', Times, serif;
        }

        select {
            width: 100%;
            height: 20px;
        }

        input[type="checkbox"] {
            width: 20px;
        }

        label[for="opcion-1"] {
            text-align: center;
            padding-bottom: 2px;
        }

        button {
            width: 30%;
            margin: 0 auto;
            display: block;
            padding: .4rem 1rem;
            background-color: white;
            border-radius: 2rem;
            border-style: none;
            letter-spacing: .01rem;
        }

        button:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>Este es un formulario de Contacto</h1>
    <form action="index.php"
        method="post">
        <div>
            <label for="nombre">Nombres:</label>
            <input placeholder="Ingrese su Nombre" type="text" name="nombre" id="nombre">
        </div>
        <br>
        <div>
            <label for="asignatura">Asignatura</label>
            <select name="asignatura" id="asignatura">
                <option value="ingles">Ingles</option>
                <option value="comunicacion">Comunicación</option>
                <option value="matematicas">Matematicas</option>
            </select>
        </div>
        <br>
        <div>
            <label for="opcion-1">
                <input type="checkbox" value="Manzana" id="opcion-1" name="frutas">
                Manzana
            </label>
        </div>
        <br>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>

</html>