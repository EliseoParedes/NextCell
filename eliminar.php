<?php
$id = $_GET['id'];


$conexion = mysqli_connect("localhost", "root", "", "nextcell");
$sql = "DELETE FROM clientes where id like $id";
$rta = mysqli_query($conexion, $sql);

if (!$rta) {
    echo "No Ingresado";
}
else {
    header("location: tabla.php");
}

?>