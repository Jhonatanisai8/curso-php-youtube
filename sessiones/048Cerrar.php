<?php
session_name("LOGIN");
session_start();
session_destroy();
/*
- para eliminar solo las variables
session_unset();

- para eliminar solo un variable determinada
unset($_SESSION["Nombre"]);
 */
