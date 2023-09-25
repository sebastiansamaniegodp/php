<!DOCTYPE html>
<html lang="es-PY">
    <head>
        <title>Temperatura</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
    <?php
        //A parte de for(), existe el while(): el ciclo mientras
        $temperatura = 0;
        //a diferencia del for(), el while() requiere indicar el contador
        //mientras más próximo al valor 100 pintar un tono rojo más fuerte
        while ($temperatura <=100 ) {
            $rojo = $temperatura * 2.55; //Convierte la temperatura en un valor de rojo menor a 255
            $style = "color: rgb($rojo, 100, 100);";
            echo "<p style = '$style'>La temperatura es: $temperatura</p>";
            $temperatura++;
        }
        ?>
    </body>
</html>