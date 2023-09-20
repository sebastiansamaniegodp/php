<!DOCTYPE html>
<html lang="es-PY">
    <head>
        <meta charset="UTF-8"/>
        <title>Array 2</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <?php
        $edades = array("Moises" => "33", "Camila" => "25",
        "Samanta" => "17");
        echo "Camila tiene " .$edades['Camila'] . " años.";
        echo "<br>";

        foreach($edades as $x => $valor) {
            echo "Clave= " . $x . ", valor= " . $valor;
            echo "<br>";
        }
        ?>
    </body>
</html>