<!DOCTYPE html>
<html lang="es-PY">
    <head>
        <title>Edad</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
        $edad = 20;

        #condicional multiple que imprime un texto según la edad
        #mejora el código para que los rangos sean MAYOR: 18 a 80 y MENOR 11 A 17
        if ($edad >= 18 && $edad <= 80) {
            echo "Eres mayor de edad";
        } else if ($edad >=11 && $edad <= 17) {
            echo "Eres menor de edad";
        } else {
            echo "Algo anda mal :(";
        }
        ?>
    </body>
</html>