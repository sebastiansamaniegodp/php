<!DOCTYPE html>
<html lang="es-PY">
    <head>
        <meta charset="UTF-8"/>
        <title>Array 3</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <?php
        $productos = array (
            array("Heladera", 2500000, 18),
            array("Microondas", 1500000, 9),
            array("Cocina", 590000, 21),
            array("Licuadora", 450000, 15),
            array("Mixer", 260000, 5),
            array("Ventilador", 150000, 15)
        );
        //imprimir todos los valores
        foreach($productos as $producto) {
            echo "Nombre: " . $producto[0] . "<br>";
            echo "Precio: Gs." . $producto[1] . "<br>";
            echo "Stock: " . $producto[2] . "<br>";
            echo "<br>";
        }

        //imprimir solo los productos con (PRECIO <= 1000000)
        foreach ($productos as $producto) {
            $nombre = $producto[0];
            $precio = $producto[1];
            $stock = $producto[2];
            if ($precio <= 1000000) {
            echo "Nombre: " . $nombre . "<br>";
            echo "Precio: " . $precio  . "<br>";
            echo "Stock: " . $stock . "<br>";
            echo "<br>";
            }
        } 
        ?>
    </body>
</html>