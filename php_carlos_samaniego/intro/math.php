<!DOCTYPE html>
<html lang="es-PY">
    <head>
        <meta charset="UTF-8"/>
        <title>Math</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <?php
        echo(pi()); //retorna el valor de PI
        echo "<br>";

        echo(min(0, 150, 30, 20, -8, -200)); //retorna el menor
        echo "<br>";
        echo(max(1, 150, 30, 20, -8, -200)); //retorna el mayor
        echo "<br>";

        echo(abs(-6.7)); //retorna el valor absoluto
        echo "<br>";

        echo(sqrt(64)); //retorna la raiz cuadrada
        echo "<br>";

        echo(round(0.60)); //redondea hacia arriba si el valor >= .5;
        echo "<br>";
        echo(round(0.49)); //redondea hacia abajo si el valor es <= .5
        echo "<br>";

        echo(rand()); //valor aleatorio
        echo "<br>";
        echo(rand(10, 100)); //valor aleatorio entre 10 y 100
        echo " <= Valor aleatorio entre 10 y 100";
        ?>
    </body>
</html>