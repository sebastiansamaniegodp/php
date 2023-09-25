<!DOCTYPE html>
<html lang="es-PY">
    <head>
        <title>Multiplicación</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
        //imprimir una tabla de multiplicar con for()
        //luego mejorar para imprimir todas las tablas del 1 al 10
        for ($x = 1; $x <= 10; $x++) {
            for ($y = 0; $y <= 10; $y++) {
                echo "$x x $y = " .($x * $y) . "<br>";
                if ($y == 10) {
                    echo "<br>";
                }
            }
        }
        ?>
    </body>
</html>