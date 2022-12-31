<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>

<?php
$id = $_GET['id'];
$rut = $_GET['rut'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$direccion = $_GET['direccion'];
$email = $_GET['email'];
$credito_disponible = $_GET['credito_disponible'];
$credito_consumido_mensual = $_GET['credito_consumido_mensual'];
$usuario_electronico = $_GET['usuario_electronico'];
?>
    <div>
        <form action="update.php" method="post">
            <table border="1">
                <tr>
                    <td>Ingresar Datos</td>
                    <td><input type="text" name="id" id="" style="visibility:hidden" value="<?=$id?>"></td>
                </tr>
                <tr>
                    <td>Rut:</td>
                    <td><input type="text" name="rut" id="" value="<?=$rut?>"></td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre" id="" value="<?=$nombre?>"></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type="text" name="apellido" id="" value="<?=$apellido?>"></td>
                </tr>
                <tr>
                    <td>Direccion:</td>
                    <td><input type="text" name="direccion" id="" value="<?=$direccion?>"></td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td><input type="text" name="email" id="" value="<?=$email?>"></td>
                </tr>
                <tr>
                    <td>Credito Disponible:</td>
                    <td><input type="text" name="credito_disponible" id="" value="<?=$credito_disponible?>"></td>
                </tr>
                <tr>
                    <td>Promedio De Credito Consumido Mensual:</td>
                    <td><input type="text" name="credito_consumido_mensual" id="" value="<?=$credito_consumido_mensual?>"></td>
                </tr>
                <tr>
                    <td>Usuario Electronico:</td>
                    <td><input type="text" name="usuario_electronico" id="" value="<?=$usuario_electronico?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td><input type="submit" value="Cancelar"><a href="tabla.php"></a></td>
                </tr>

            </table>


        </form>
    </div>
</body>
</html>