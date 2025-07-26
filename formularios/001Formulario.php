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

        .opciones__multiples {
            display: flex;
            flex-direction: column;
        }

        .opciones__multiples label {
            font-size: 1em;
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
        <div style="margin-top: 1rem;">
            <label for="lenguajes">Lenguaje de Programacion Favoritos</label>
            <select name="lenguaje[]" id="lenguaje" multiple>
                <option value="java">JAVA</option>
                <option value="python">PYTHON</option>
                <option value="c">C++</option>
                <option value="javascript">JAVASCRIPT</option>
            </select>
        </div>
        <br>
        <div>
            <label for="opcion-04">
                <input type="checkbox" value="Manzana" id="opcion-04" name="frutas">
                Manzana
            </label>
        </div>
        <br>
        <div class="opciones__multiples">
            <h2>PROFESIONES</h2>
            <label for="opcion-01">
                <input type="checkbox" value="ingenieria_de_sistemas" id="opcion-01" name="profesiones[]">
                Ingeniería de Sistemas
            </label>
            <label for="opcion-02">
                <input type="checkbox" value="ingenieria_de_software" id="opcion-02" name="profesiones[]">
                Ingeniería de Software
            </label>
            <label for="opcion-03">
                <input type="checkbox" value="ciencias_de_comunicacion" id="opcion-03" name="profesiones[]">
                Ciencias de la Computación
            </label>
        </div>

        <br>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>

</html>