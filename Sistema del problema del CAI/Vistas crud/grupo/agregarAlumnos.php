<?php
    include_once "conexion.php";
    $sentencia1 = $base_de_datos->query("SELECT * FROM alumnos;");
    $alumnos = $sentencia1->fetchALL(PDO::FETCH_OBJ);
    
    $id = $_GET["id"];
?>

<!doctype html>

<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Registro</title>

</head>
<body>
	<form method="post" action="guardarAlumnos.php">

	<nav class="navbar navbar-dark bg-dark">
		<!-- Navbar content -->
		<a class="navbar-brand" href="https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/grupos">CAI/Grupos</a>
	</nav>
	<br>
	<div class="card mx-auto" style="max-width:800px;">
		<div class="card-header">
			<h3><b>Agregar alumnos en el Grupo <?php echo $id?></b></h3>
			<!-- h3 para el tmaño de las letras
			 b para negritas
			 br para salto de linea
			 max-width para tamaño maximo a la tarjerta
			 mx-auto para centrar la tarjeta-->
		</div>
		<div class="card-body">
                    <input type="hidden" class="form-control" name="id" id="inputAddress" value="<?php echo $id ?>">	 
		    
					<div class="form-group">
							<label for="inputAddress">Seleccione a un alumno a la vez:</label>
							<select id="inputState" class="form-control" name="Nombre">
								<option selected>Seleccionar maestro</option>
								<?php foreach($alumnos as $alumnos){?>   
                                    <option><?php echo $alumnos->Nombre ?></option>
                                <?php } ?>
						</select>
						</div>
				
				<button type="submit" class="btn btn-primary">Aceptar</button>
                <a role="button" class="btn btn-success my-2 my-sm-0" href="https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/grupos/listarGrupos.php">Regresar</a>
		</div>
	</div>
</form>

</body>
</html>