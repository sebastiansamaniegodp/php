<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="es-PY">
    <head>
        <meta charset="UTF-8"/>
        <title>Cerrar sesión</title>
    </head>
    <body>
        <h2>Has cerrado la sesión</h2>
        <br/>
        <p><a href="login.php">Ir al Login</a></p>
    </body>
</html>