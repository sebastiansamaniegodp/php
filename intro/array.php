<!DOCTYPE html>
<html lang="es-PY">
    <head>
        <meta charset="UTF-8"/>
        <title>Array</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <?php
        $dia[0] = "domingo";
        $dia[1] = "lunes";
        $dia[2] = "martes";
        $dia[3] = "miércoles";
        $dia[4] = "jueves";
        $dia[5] = "viernes";
        $dia[6] = "sábado";

        $mes = array("enero","febrero","marzo");
        //mostrar el viernes
        echo "Dia: " .$dia[5];
        echo "<br>";
        //imprimir febrero
        echo "Mes: " .$mes[2];
        echo "<br>";
        ?>
        
        <?php
        $autos = array("Volvo", "BMW", "Toyota");
        $arraylongitud = count($autos);
        for ($x = 0; $x < $arraylongitud; $x++) {
            echo $autos[$x];
            echo "<br>";
        }
        ?>
    </body>
</html>