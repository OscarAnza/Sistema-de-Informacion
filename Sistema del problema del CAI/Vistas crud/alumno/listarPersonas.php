<?php
include_once "conexion.php";
$sentencia = $base_de_datos->query("SELECT * FROM alumnos;");
$alumnos = $sentencia->fetchALL(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Alumnos</title>
    </head>

    <body>
        <table>
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Carrera</th>
                    <th>Nivel</th>
                    <th>Horas Realizadas</th>
                    <th>Fecha de ultimo ingreso</th>
                    <th>Horario de ultimo ingreso</th>
                    <!-- modificar lo de arriba-->
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($alumnos as $alumnos){?>   
                <tr>
                    <!-- modificar lo de abajo-->
                    <td><?php echo $alumnos->Matricula ?></td>
                    <td><?php echo $alumnos->Nombre ?></td>
                    <td><?php echo $alumnos->Carrera ?></td>
                    <td><?php echo $alumnos->Nivel ?></td>
                    <td><?php echo $alumnos->HorasRealizadas ?></td>
                    <td><?php echo $alumnos->UltimoIngresoFecha ?></td>
                    <td><?php echo $alumnos->UltimoIngresoHorario ?></td>

                    <td><a href="<?php echo "editar.php?id=" . $alumnos->Matricula?>">Editar</a></td>
                    <td><a href="<?php echo "eliminar.php?id=" . $alumnos->Matricula?>">Eliminar</a></td>
                </tr> 
               <?php } ?>
            </tbody>
        </table>
    </body>
</html>