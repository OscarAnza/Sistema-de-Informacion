<<<<<<< HEAD
<?php
include_once "conexion.php";
$sentencia = $base_de_datos->query("SELECT * FROM maestros;");
$maestros = $sentencia->fetchALL(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Maestros</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
    		<!-- Navbar content -->
    		<a class="navbar-brand" href="https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/maestros">CAI/Maestros</a>
    	</nav>
    	<br>
    	<div class="card mx-auto" style="max-width:800px;">
    		<div class="card-header">
    			<h3><b>Maestros</b></h3>
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

                    <td><a href="<?php echo "editar.php?id=" . $maestros->idMaestro ?>">Editar</a></td>
                    <td><a href="<?php echo "eliminar.php?id=" . $maestros->idMaestro ?>">Eliminar</a></td>
                </tr> 
               <?php } ?>
            </tbody>
        </table>
        <br>
        <br>
        <div class="card-body">
            <a role="button" class="btn btn-success my-2 my-sm-0" href="https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/maestros">Regresar</a>
        </div>
    </body>
=======
<?php
include_once "conexion.php";
$sentencia = $base_de_datos->query("SELECT * FROM maestros;");
$maestros = $sentencia->fetchALL(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Maestros</title>
    </head>

    <body>
        <nav class="navbar navbar-dark bg-dark">
    		<!-- Navbar content -->
    		<a class="navbar-brand" href="https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/maestros">CAI/Maestros</a>
    		<button class="btn btn-outline-success my-2 my-sm-0" type="button">Cerrar Sesión</button>
    	</nav>
    	<br>
    	<div class="card mx-auto" style="max-width:800px;">
    		<div class="card-header">
    			<h3><b>Maestros</b></h3>
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

                    <td><a href="<?php echo "editar.php?id=" . $maestros->idMaestro ?>">Editar</a></td>
                    <td><a href="<?php echo "eliminar.php?id=" . $maestros->idMaestro ?>">Eliminar</a></td>
                </tr> 
               <?php } ?>
            </tbody>
        </table>
    </body>
>>>>>>> 99a7109918dd1a614754e38e9c7debe83d794976
</html>