<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uso del Include PHP</title>
</head>
<body>
<nav>
    <!--   abrimos codigo php-->
    <?php
    include("in/nav.php");
    ?>
    <header>
        <h1>Lorem ipsum dolor sit amet.</h1>
    </header>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus blanditiis corporis deleniti distinctio et
        eveniet ex, exercitationem facere laborum magni natus nemo neque nesciunt quam saepe vel, vero. Asperiores
        aspernatur debitis distinctio earum est eveniet necessitatibus, non quo vel vitae.
    </p>
    <?php
    include("in/footer.php");
    ?>
</nav>
</body>
</html>