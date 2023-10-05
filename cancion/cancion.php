<?php
include 'conexion.php';
$sql = "select cancion.nombre 'NOMBRE',
cancion.autor 'AUTOR',
genero.descripcion 'GENERO'
from cancion join genero on
cancion.GENERO_ID = genero.id;";

$resultado = $conexion -> query($sql);

if($resultado -> num_rows > 0) {
    while ($f = $resultado -> fetch_assoc()) {
        echo "<br>";
        echo "Canción: " . $f['NOMBRE'];
        echo "<br>";
        echo "Autor: " . $f['AUTOR'];
        echo "<br>";
        echo "Género: " . $f['GENERO'];
        echo "<hr>";
    }
}
?>

<form method="post" action="controladorcancion.php">
    <input type="text" name="autor" placeholder="Autor" required>
    <input type="text" name="nombre" placeholder="Nombre de la canción" required>
    <select name="genero_id" required>
        <?php
        $sql_genero = "select * from genero;";
        $res = $conexion -> query($sql_genero);
        while ($f = $res -> fetch_assoc()) {
            echo "<option value='" . $f['ID'] . "'>" .$f['DESCRIPCION']." </option>";
        }
        ?>
    </select>
    <button type="submit">Guardar</button>
</form>