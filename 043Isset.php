<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo Isset</title>
</head>

<body>
    <form action="044IssetVariables.php" method="post">
        <div>
            <input type="text" name="numero" id="numero" placeholder="Ingresa un numero">
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>

    <?php
    if (isset($numero_recibido) && $numero_recibido !== "") {
        
    }
    ?>
</body>

</html>