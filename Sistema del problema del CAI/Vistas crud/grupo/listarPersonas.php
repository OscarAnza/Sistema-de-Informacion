<?php
include_once "conexion.php";
$sentencia = $base_de_datos->query("SELECT * FROM grupos;");
$grupos = $sentencia->fetchALL(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Grupos</title>
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
                <?php foreach($grupos as $grupos){?>   
                <tr>
                    <!-- modificar lo de abajo-->
                    <td><?php echo $grupos->idGrupos ?></td>
                    <td><?php echo $grupos->Nombre ?></td>
                    <td><?php echo $grupos->Matriculas ?></td>
                    <td><?php echo $grupos->Nivel ?></td>
                    <td><?php echo $grupos->Carrera ?></td>


                    <td><a href="<?php echo "editar.php?id=" . $personas->idGrupos?>">Editar</a></td>
                    <td><a href="<?php echo "eliminar.php?id=" . $personas->idGrupos?>">Eliminar</a></td>
                </tr> 
               <?php } ?>
            </tbody>
        </table>
    </body>
</html>