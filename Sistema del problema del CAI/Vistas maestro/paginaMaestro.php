<?php
include_once "conexion.php";
$sentencia = $base_de_datos->query("SELECT * FROM grupos;");
$grupos = $sentencia->fetchALL(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Pagina Principal</title>
    </head>

    <body>
        <nav class="navbar navbar-dark bg-dark">
    		<!-- Navbar content -->
    		<a class="navbar-brand" href="https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas maestro/paginaMaestro.php">CAI/Grupos</a>
    		<a role="button" class="btn btn-outline-success my-2 my-sm-0" href="https://sistemas-de-informacion.000webhostapp.com">Cerrar Sesión</a>
    	</nav>
    	<br>
    	<div class="card mx-auto" style="max-width:800px;">
    		<div class="card-header">
    			<h3><b>Pagina Principal</b></h3>
    		</div>
    		
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Maestro</th>
                    <th>Nivel</th>
                    <th>Carrrera</th>
                    <!-- modificar lo de arriba-->
                </tr>
            </thead>
            <tbody>
                <?php foreach($grupos as $grupos){?>   
                <tr>
                    <!-- modificar lo de abajo-->
                     <td><a href="<?php echo "generarReporte.php?id=" . $grupos->idGrupos ?>"><?php echo $grupos->idGrupos?></a></td>
                    <td><?php echo $grupos->Nombre ?></td>
                    <td><?php echo $grupos->Nivel ?></td>
                    <td><?php echo $grupos->Carrera ?></td>
                </tr> 
               <?php } ?>
            </tbody>
        </table>
    </body>
</html>