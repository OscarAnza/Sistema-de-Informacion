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
        <title>Grupos</title>
    </head>

    <body>
        <nav class="navbar navbar-dark bg-dark">
    		<!-- Navbar content -->
    		<a class="navbar-brand" href="https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/grupos">CAI/Grupos</a>
    		<button class="btn btn-outline-success my-2 my-sm-0" type="button">Cerrar Sesión</button>
    	</nav>
    	<br>
    	<div class="card mx-auto" style="max-width:800px;">
    		<div class="card-header">
    			<h3><b>Grupos</b></h3>
    			<!-- h3 para el tmaño de las letras
    			 b para negritas
    			 br para salto de linea
    			 max-width para tamaño maximo a la tarjerta
    			 mx-auto para centrar la tarjeta-->
    		</div>
    		
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Maestro</th>
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


                    <td><a href="<?php echo "editar.php?id=" . $grupos->idGrupos ?>">Editar</a></td>
                    <td><a href="<?php echo "eliminar.php?id=" . $grupos->idGrupos ?>">Eliminar</a></td>
                </tr> 
               <?php } ?>
            </tbody>
        </table>
    </body>
</html>