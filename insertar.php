<?php
$rut = $_POST['rut'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$credito_disponible = $_POST['credito_disponible'];
$credito_consumido_mensual = $_POST['credito_consumido_mensual'];
$usuario_electronico = $_POST['usuario_electronico'];

 function validar_requerido(string $texto): bool
                {
                    return !(trim($texto) == '');
                }

                function validar_entero(string $numero): bool
                {
                    return (filter_var($numero, FILTER_VALIDATE_INT) === FALSE) ? False : True;
                }

                function validar_email(string $texto): bool
                {
                    return (filter_var($texto, FILTER_VALIDATE_EMAIL) === FALSE) ? False : True;
                }
				
				
				
				 if (!filter_var($rut)) {
                    $errores[] = 'El campo Rut es obligatorio.';
                }
                if (!validar_requerido($nombre)) {
                    $errores[] = 'El campo Nombre es obligatorio.';
                }else{
					echo 'no valido nombre ';
				}
                if (!validar_requerido($apellido)) {
                    $errores[] = 'El campo Apellido es obligatorio.';
                }else{
					echo 'no valido apellido ';
				}
                if (!validar_requerido($direccion)) {
                    $errores[] = 'El campo Direccion es obligatorio.';
                }else{
					echo 'no valido direccion  ';
				}
                if (!validar_email($email)) {
                    $errores[] = 'El campo de Email tiene un formato no válido.';
                }else{
					echo 'no valido mail ';
				}
                if (!filter_var($credito_disponible)) {
                    $errores[] = 'El campo Credito Disponible es obligatorio.';
                }else{
					echo 'no valido credito ';
				}
                if (!filter_var($credito_consumido_mensual)) {
                    $errores[] = 'El campo Credito de Consumido Mensual es obligatorio.';
                }else{
					echo 'no valido consumido ';
				}
                if (!filter_var($usuario_electronico)) {
                    $errores[] = 'El campo Usuario Electronico es obligatorio.';
                }else{
					echo 'no valido correo ';
				}







echo $rut.' '.$nombre.' '.$apellido.' '.$direccion.' '.$email.' '.$credito_disponible.' '.$credito_consumido_mensual.' '.$usuario_electronico;

if($rut !== "" && $nombre !== "" && $apellido !== "" && $direccion !== "" && $email !== "" && $credito_disponible !== "" 
&& $credito_consumido_mensual !== "" && $usuario_electronico  !== "") {
	$conexion = mysqli_connect("localhost", "root", "", "nextcell");
	$sql = "INSERT INTO clientes(rut, nombre, apellido, direccion, email, credito_disponible, credito_consumido_mensual, usuario_electronico) VALUES('$rut', '$nombre', '$apellido', '$direccion', '$email', '$credito_disponible', '$credito_consumido_mensual', '$usuario_electronico')";
	$rta = mysqli_query($conexion, $sql);
	if (!$rta) {
		echo "No Ingresado";
	}
	else {
		header("location: tabla.php");
	}
}else{
	echo 'debe completar todos los campos';
}

?>