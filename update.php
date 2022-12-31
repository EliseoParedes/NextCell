<?php
$id = $_POST['id'];
$rut = $_POST['rut'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$credito_disponible = $_POST['credito_disponible'];
$credito_consumido_mensual = $_POST['credito_consumido_mensual'];
$usuario_electronico = $_POST['usuario_electronico'];


$conexion = mysqli_connect("localhost", "root", "", "nextcell");
$sql = "UPDATE clientes SET rut='$rut', nombre='$nombre', apellido='$apellido', direccion='$direccion', email='$email', credito_disponible='$credito_disponible', credito_consumido_mensual='$credito_consumido_mensual', usuario_electronico='$usuario_electronico' where id like $id";
$rta = mysqli_query($conexion, $sql);

if (!$rta) {
    echo "No Ingresado";
}
else {
    header("location: tabla.php");
}

?>