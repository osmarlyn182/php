
<?php 
require_once 'funciones.php';
$data = consultar();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
</head>
<body>
    <ul>
        <li><a href="registrardates.php"> Registrar</a></li>
         <li><a href="index.php">Home</a></li>
    </ul>

    <table border="2">
       <tr>
         <th>Id</th>
         <th>Nombre</th>
         <th>Descripción</th>
         <th>Precio</th>

        </tr>
        <?php foreach ((array) $data as $value){ ?>
        <tr>
            <td><?=$value['id']?></td>
            <td><?=$value['nombre']?></td>
            <td><?=$value['descripcion']?></td>
            <td><?=$value['precio']?></td>
            
        </tr>
       <?php } ?>

    
    </table>
</body>
</html>