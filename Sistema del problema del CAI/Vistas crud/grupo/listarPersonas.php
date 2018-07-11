<?php
include_once "conexion.php";
$sentencia = $base_de_datos->query("SELECT * FROM personas;");
$personas = $sentencia->fetchALL(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla</title>
    </head>

    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Matriculas</th>
                    <th>Nivel</th>
                    <th>Carrrera</th>
                    <!-- modificar lo de arriba-->
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($personas as $personas){?>   
                <tr>
                    <!-- modificar lo de abajo-->
                    <td><?php echo $personas->id ?></td>
                    <td><?php echo $personas->nombre ?></td>
                    <td><?php echo $personas->matriculas ?></td>
                    <td><?php echo $personas->nivel ?></td>
                    <td><?php echo $personas->carrera ?></td>


                    <td><a href="<?php echo "editar.php?id=" . $personas->id?>">Editar</a></td>
                    <td><a href="<?php echo "eliminar.php?id=" . $personas->id?>">Eliminar</a></td>
                </tr> 
               <?php } ?>
            </tbody>
        </table>
    </body>
</html>