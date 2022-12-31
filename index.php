<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<h1>Formulario Cliente</h1>

        <?php if (isset($errores)): ?>
        <ul class="errores">
            <?php 
                foreach ($errores as $error) {
                    echo '<li>' . $error . '</li>';
                } 
            ?> 
        </ul>
        <?php endif; ?>

<body>

       <form method="POST" action="insertar.php" name="enviar">
       
           <p>
               
               <input type="text" name="rut" placeholder="Rut">
           </p>
           <p>
             
               <input type="text" name="nombre" placeholder="Nombre">
           </p>
           <p>
               
               <input type="text" name="apellido" placeholder="Apellido">
           </p>
           <p>
               
               <input type="text" name="direccion" placeholder="Direccion">
           </p>
           <p>
              
               <input type="text" name="email" placeholder="Email">
           </p>
           <p>
               
               <input type="text" name="credito_disponible" placeholder="Credito Disponible">
           </p>
           <p>
               
               <input type="text" name="credito_consumido_mensual" placeholder="Credito Consumido Mensual">
           </p>
           <p>
               
               <input type="text" name="usuario_electronico" placeholder="Usuario Electronico">
           </p>

           <p>

               <input type="submit" value="Enviar">
           </p>
         

       </form>

       <input type="button" value="Registro" onclick="location='tabla.php'" />
       
       
</body>

</html>


