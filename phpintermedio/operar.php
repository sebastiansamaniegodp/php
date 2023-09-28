<?php
switch ($_REQUEST['operacion']) {
    case "sumar":
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es: " . $suma;
    break;

    case "restar":
    $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
    echo "La resta es: " . $resta;
    break;

    case "multiplicar":
    $multiplicacion = $_REQUEST['valor1'] * $_REQUEST['valor2'];
    echo "La multiplicacion es: " . $multiplicacion;
    break;

    case "dividir":
    $division = $_REQUEST['valor1'] / $_REQUEST['valor2'];
    echo "La division es: " . $division;
    break;
}
?>