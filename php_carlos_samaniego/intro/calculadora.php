<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <h1>Calculadora PHP</h1>
    <form method="post" action="">
        <input type="number" name="numero1" placeholder="Numero1" required>
        <input type="number" name="numero2" placeholder="Numero2" required>
        <select name="operador">
            <option value="sumar">Suma (+)</option>
            <option value="restar">Resta (-)</option>
            <option value="multiplicar">Multiplicacion (*)</option>
            <option value="dividir">Division (/)</option>
            <option value="cuadrado">Cuadrado (2)</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operador = $_POST["operador"];
        $resultado = 0;

        switch ($operador) {
            case "sumar":
                $resultado = $numero1 + $numero2;
                break;

            case "restar":
                $resultado = $numero1 - $numero2;
                break;

            case "multiplicar":
                $resultado = $numero1 * $numero2;
                break;

            case "dividir":
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    echo "¡No se puede dividir entre cero!";
                }
                break;

            case "cuadrado":
                $resultado = $numero1 * $numero1;
                break;

            default:
                echo "Operacion no valida.";
                break;
        }

        echo "<p>Resultado: $resultado</p>";
    }
    ?>
</body>
</html>