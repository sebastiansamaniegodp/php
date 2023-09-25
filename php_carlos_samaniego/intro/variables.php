<!DOCTYPE html>
<html lang="es-PY">
    <head>
        <title>Comparar dos números</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
        //esto es un comentario
        //las variables inician con el simbolo de $ (pesos)
        $numero_1 = 30;
        $numero_2 = 30;

        #condicional si..sino..
        if ($numero_1 > $numero_2) {
            echo ("El número mayor es NUMERO_1 que es igual a " .$numero_1);
        } 
        else if ($numero_1 < $numero_2) {
            echo ("El número mayor es NUMERO_2 que es igual a " .$numero_2);
        } else {
            echo ("Los números son iguales.");
        }
        ?>
    </body>
</html>