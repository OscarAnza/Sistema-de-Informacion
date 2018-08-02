<?php
if(!isset($_GET["id"])) exit();

$id = $_GET['id'];

include_once "conexion.php";

$sentencia = $base_de_datos->prepare("SELECT * FROM alumnos WHERE Matricula = ?;");
$sentencia->execute([$id]);
$alumno = $sentencia->fetch(PDO::FETCH_OBJ);

if($alumno == FALSE) echo "No existe ninguna persona con ese id";
?>

<!doctype html>

<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Editar</title>

</head>
<body>
	<form method="post" action="guardarES.php">

    	<nav class="navbar navbar-dark bg-dark">
    		<!-- Navbar content -->
    		<a class="navbar-brand" href="#">CAI</a>
    	</nav>
    	<br>
    	<div class="card mx-auto" style="max-width:800px;">
    		<div class="card-header">
    			<h3><b>Editar Entrada/Salida del alumno <?php echo $alumno->Matricula ?></b></h3>
    		</div>
    		
    		<div class="card-body">
    			<div class="form-row">
        			<div class="form-group col-md-6">
        					<input type="hidden" class="form-control" name="Matricula" id="inputEmail4" value="<?php echo $alumno->Matricula?>">
    				</div>
    			</div>
    
        		<div class="form-row">
    				<div class="form-group col-md-6">
    						<label for="inputEmail4">Hora de Entrada</label>
    						<input type="text" class="form-control" name="horaEntrada" id="inputEmail4" placeholder="hr:min">
    		        </div>
        		</div>
        		
        		<div class="form-row">
    				<div class="form-group col-md-6">
    						<label for="inputEmail4">Hora de Salida</label>
    						<input type="text" class="form-control" name="horaSalida" id="inputEmail4" placeholder="hr:min">
    		        </div>
        		</div>
        		
        		<div class="form-row">
    				<div class="form-group col-md-6">
    						<label for="inputEmail4">Fecha de Ingreso</label>
    						<input type="text" class="form-control" name="fecha" id="inputEmail4" placeholder="AAAA/MM/DD">
    		        </div>
        		</div>
    				
    				<button type="submit" class="btn btn-primary">Guardar Cambios</button>
    			    <a role="button" class="btn btn-success my-2 my-sm-0" href="https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/alumnos">Regresar</a>
    		</div>
        </div>
    </form>
</body>
</html>