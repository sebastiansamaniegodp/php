<?php
//esto es un comentario
/* esto comentario
multilinea
*/
//definicion de variables y asignacion de datos
$a = 8;
$b = 3;
echo "<h3>Operaciones Aritméticas</h3>";
echo "a = " . $a . " y b = " . $b;
echo "<br>La suma de a + b es " . ($a + $b);
echo "<br>La resta de a - b es " . ($a - $b);
echo "<br>La division de a / b es " . ($a / $b);
echo "<br>La multiplicación de a * b es " . ($a * $b);
echo "<br>a exponente b es " . ($a ** $b);
echo "<br>a resto b es " . ($a % $b);
?>

<?php
$x = 8;
$y = 3;
echo "<h3>Operadores de comparación. VACIO ES FALSE, 1 ES TRUE</h3>";
echo "x = " .$x. ", y = " .$y;
echo "<br>¿x es igual a y? " .($x == $y);
echo "<br>¿x es distinto a y? " .($x != $y);
echo "<br>¿x es menor a y " .($x > $y);
echo "<br>¿x es mayor a y " .($x > $y);
echo "<br>'¿x es menor o igual a y? " .($x <= $y);
echo "<br>¿x es mayor o igual a y? " .($x >= $y);
?>

<?php
echo "<h3>Operadores lógicos Y, O, negación</h3>";
echo "A es igual a B y X es mayor a Y" .($a == $b && $x > $y);
echo "<br>A es igual a B o X es igual a Y " .($a == $b || $x == $y);
echo "<br>Negar (B es igual a X)" .!($b == $x);
?>