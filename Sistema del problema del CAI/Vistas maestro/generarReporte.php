<?php
include_once "conexion.php";
$id = $_GET["id"];
$name = "grupo" . $id;
$sentencia3 = $base_de_datos->query("SELECT * FROM $name;");
$alumnosGrupo = $sentencia3->fetchALL(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Grupo <?php echo $id?></title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
                <!-- Navbar content -->
                <a class="navbar-brand" href="https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/grupos/listarGrupos.php">CAI/Grupo <?php echo $id?></a>
            </nav>
            <br>
            <div class="card mx-auto" style="max-width:800px;">
                <div class="card-header">
                    <h3><b>Reporte del Grupo<?php echo $id?></b></h3>
                    <!-- h3 para el tmaño de las letras
                    b para negritas
                    br para salto de linea
                    max-width para tamaño maximo a la tarjerta
                    mx-auto para centrar la tarjeta-->
            </div>
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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($alumnosGrupo as $alumnosGrupo){?>   
                        <tr>
                            <td><?php echo $alumnosGrupo->Matricula ?></td>
                            <td><?php echo $alumnosGrupo->Nombre ?></td>
                            <td><?php echo $alumnosGrupo->Carrera ?></td>
                            <td><?php echo $alumnosGrupo->Nivel ?></td>
                            <td><?php echo $alumnosGrupo->HorasRealizadas ?></td>
                            <td><?php echo $alumnosGrupo->UltimoIngresoFecha ?></td>
                            <td><?php echo $alumnosGrupo->UltimoIngresoEntrada . " - " . $alumnosGrupo->UltimoIngresoSalida ?></td>
                        </tr>
                    <?php } ?>
                 </tbody>
            </table>
            <div class="card-body">
                <a role="button" class="btn btn-success my-2 my-sm-0" href="https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/grupos/listarGrupos.php">Regresar</a>
            </div>
    </body>
</html>