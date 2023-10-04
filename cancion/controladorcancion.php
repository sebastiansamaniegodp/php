<?php
if (isset($_POST)) {
    $autor = $_POST['autor'];
    $nombre = $_POST['nombre'];
    $genero = $_POST['genero_id'];
    #aqui el nick es estatico porque aun no se implementa session
    $nick = 'carlos';
}
?>
<?php
include "conexion.php";

$sql_insertar = "insert into cancion (ID, AUTOR, NOMBRE, GENERO_ID, NICKNAME) 
                values (default, '$autor', '$nombre', '$genero', '$nick');";

$conexion -> query($sql_insertar);

#una vez insertado, volver a cancion.php
header("Location: cancion.php");
exit;