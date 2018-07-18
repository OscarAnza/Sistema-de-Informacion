<?php
include_once "conexion.php";
$sentencia = $base_de_datos->query("SELECT * FROM maestros;");
$maestros = $sentencia->fetchALL(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Maestros</title>
    </head>

    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Turno</th>
                    
                    <!-- modificar lo de arriba-->
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($maestros as $maestros){?>   
                <tr>
                    <!-- modificar lo de abajo-->
                    <td><?php echo $maestros->idMaestro ?></td>
                    <td><?php echo $maestros->Nombre ?></td>
                    <td><?php echo $maestros->Turno ?></td>

                    <td><a href="<?php echo "editar.php?id=" . $maestros->idMaestro?>">Editar</a></td>
                    <td><a href="<?php echo "eliminar.php?id=" . $maestros->idMaestro?>">Eliminar</a></td>
                </tr> 
               <?php } ?>
            </tbody>
        </table>
    </body>
</html>