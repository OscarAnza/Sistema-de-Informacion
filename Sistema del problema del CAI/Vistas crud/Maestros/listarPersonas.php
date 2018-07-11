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
                    <th>Apellidos</th>
                    <th>Sexo</th>
                    <th>Direccion</th>
                    <th>Matricula</th>
                    <th>Ocupacion</th>
                    <th>Edad</th>
                    <th>Telefono</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($personas as $personas){?>   
                <tr>
                    <td><?php echo $personas->id ?></td>
                    <td><?php echo $personas->nombre ?></td>
                    <td><?php echo $personas->apellidos ?></td>
                    <td><?php echo $personas->sexo ?></td>
                    <td><?php echo $personas->direccion ?></td>
                    <td><?php echo $personas->matricula ?></td>
                    <td><?php echo $personas->ocupacion ?></td>
                    <td><?php echo $personas->edad ?></td>
                    <td><?php echo $personas->telefono ?></td>

                    <td><a href="<?php echo "editar.php?id=" . $personas->id?>">Editar</a></td>
                    <td><a href="<?php echo "eliminar.php?id=" . $personas->id?>">Eliminar</a></td>
                </tr> 
               <?php } ?>
            </tbody>
        </table>
    </body>
</html>