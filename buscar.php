<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Clientes</title>
</head>
<body>
    <?php
        $buscar = $_POST['buscar'];
    ?> 

    <div>
        <form action="" method="post">
            <input type="text" name="buscar" id="" value="<?=$buscar?>">
            <input type="submit" value="Buscar" id="">
            <a href="tabla.php">Formulario</a>
        </form>
    </div>

    <div>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Rut</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Direccion</td>
                <td>E-mail</td>
                <td>Credito Disponible</td>
                <td>Promedio De Credito Consumido Mensual</td>
                <td>Usuario Electronico</td>
                <td>Opciones</td>

            </tr>
            <?php
            $conexion = mysqli_connect("localhost", "root", "", "nextcell");
            $sql = "SELECT id, rut, nombre, apellido, direccion, email, credito_disponible, credito_consumido_mensual, usuario_electronico FROM clientes where rut like '$buscar' '%' order by id desc";
            $rta = mysqli_query($conexion, $sql);
            while ($mostrar = mysqli_fetch_row($rta)) {
            ?>
            
            <tr>
                <td><?php echo $mostrar['0'] ?></td>
                <td><?php echo $mostrar['1'] ?></td>
                <td><?php echo $mostrar['2'] ?></td>
                <td><?php echo $mostrar['3'] ?></td>
                <td><?php echo $mostrar['4'] ?></td>
                <td><?php echo $mostrar['5'] ?></td>
                <td><?php echo $mostrar['6'] ?></td>
                <td><?php echo $mostrar['7'] ?></td>
                <td><?php echo $mostrar['8'] ?></td>
                <td> 
                    <a href="editar_db.php?
                    id=<?php echo $mostrar['0'] ?> &
                    rut=<?php echo $mostrar['1'] ?> &
                    nombre=<?php echo $mostrar['2'] ?> &
                    apellido=<?php echo $mostrar['3'] ?> &
                    direccion=<?php echo $mostrar['4'] ?> &
                    email=<?php echo $mostrar['5'] ?> &
                    credito_disponible=<?php echo $mostrar['6'] ?> &
                    credito_consumido_mensual=<?php echo $mostrar['7'] ?> &
                    usuario_electronico=<?php echo $mostrar['8'] ?>
                    ">Editar</a>
                    <a href="eliminar.php? id=<?php echo $mostrar['0'] ?>">Eliminar</a>
                </td>
            </tr>
            <?php
            }
            ?>


        </table>

    </div>

</body>
</html>