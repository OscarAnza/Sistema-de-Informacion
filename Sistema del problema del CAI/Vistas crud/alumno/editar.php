<<<<<<< HEAD
<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "conexion.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM alumnos WHERE Matricula = ?;");
$sentencia->execute([$id]);
$alumnos = $sentencia->fetch(PDO::FETCH_OBJ);
if($alumnos == FALSE){
    echo "No existe ninguna persona con ese id";
    exit();
}
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
	<form method="post" action="guardarDatosEditados.php">

	<nav class="navbar navbar-dark bg-dark">
		<!-- Navbar content -->
		<a class="navbar-brand" href="https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/alumnos">CAI/Alumnos</a>
	</nav>
	<br>
	<div class="card mx-auto" style="max-width:800px;">
		<div class="card-header">
			<h3><b>Editar alumno</b></h3>
			<!-- h3 para el tmaño de las letras
			 b para negritas
			 br para salto de linea
			 max-width para tamaño maximo a la tarjerta
			 mx-auto para centrar la tarjeta-->
		</div>
		<div class="card-body">
					<div class="form-row">
					<div class="form-group col-md-6">
							<input type="hidden" class="form-control" name="Matricula" id="inputEmail4" value="<?php echo $alumnos->Matricula?>">
						</div>
					</div>

					<div class="form-group">
							<label for="inputAddress">Nombre</label>
							<input type="text" class="form-control" name="Nombre" id="inputAddress" value="<?php echo $alumnos->Nombre?>">
						</div>
				
				
				<div class="form-group">
						<label for="inputPassword4">Carrera</label>
						<select id="inputState" class="form-control" name="Carrera">
								<option selected><?php echo $alumnos->Carrera?></option>
								<option>Ingenieria en Tecnologias de la Información</option>
								<option>Ingenieria en la Mecatronica</option>
								<option>Ingenieria en sistemas Automotrices</option>
								<option>PIMES</option>
								<option>Ingenieria en Manufactura</option>
								
						</select>
				</div>
				
				<div class="form-row">
						
						<div class="form-group col-md-6">
							<label for="inputPassword4">Nivel</label>
							<select id="inputState" class="form-control" name="Nivel">
									<option selected><?php echo $alumnos->Nivel?></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
							</select>
							
						</div>
					</div>
				
				<button type="submit" class="btn btn-primary">Guardar Cambios</button>
			    <a role="button" class="btn btn-success my-2 my-sm-0" href="https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/alumnos">Regresar</a>
		</div>
	</div>
</form>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery/jquery-3.2.1.slim.min.js"></script>
	<script src="js/jquery/popper.min.js"></script>
	<script src="js/jquery/bootstrap.min.js"></script>
</body>
=======
<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "conexion.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM alumnos WHERE Matricula = ?;");
$sentencia->execute([$id]);
$alumnos = $sentencia->fetch(PDO::FETCH_OBJ);
if($alumnos == FALSE){
    echo "No existe ninguna persona con ese id";
    exit();
}
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
	<form method="post" action="guardarDatosEditados.php">

	<nav class="navbar navbar-dark bg-dark">
		<!-- Navbar content -->
		<a class="navbar-brand" href="#">CAI</a>
		<button class="btn btn-outline-success my-2 my-sm-0" type="button">Cerrar Sesión</button>
	</nav>
	<br>
	<div class="card mx-auto" style="max-width:800px;">
		<div class="card-header">
			<h3><b>Editar alumno</b></h3>
			<!-- h3 para el tmaño de las letras
			 b para negritas
			 br para salto de linea
			 max-width para tamaño maximo a la tarjerta
			 mx-auto para centrar la tarjeta-->
		</div>
		<div class="card-body">
					<div class="form-row">
					<div class="form-group col-md-6">
							<input type="hidden" class="form-control" name="Matricula" id="inputEmail4" value="<?php echo $alumnos->Matricula?>">
						</div>
					</div>

					<div class="form-group">
							<label for="inputAddress">Nombre</label>
							<input type="text" class="form-control" name="Nombre" id="inputAddress" value="<?php echo $alumnos->Nombre?>">
						</div>
				
				
				<div class="form-group">
						<label for="inputPassword4">Carrera</label>
						<select id="inputState" class="form-control" name="Carrera">
								<option selected><?php echo $alumnos->Carrera?></option>
								<option>Ingenieria en Tecnologias de la Información</option>
								<option>Ingenieria en la Mecatronica</option>
								<option>Ingenieria en sistemas Automotrices</option>
								<option>PIMES</option>
								<option>Ingenieria en Manufactura</option>
								
						</select>
				</div>
				
				<div class="form-row">
						
						<div class="form-group col-md-6">
							<label for="inputPassword4">Nivel</label>
							<select id="inputState" class="form-control" name="Nivel">
									<option selected><?php echo $alumnos->Nivel?></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
							</select>
							
						</div>
					</div>
				
				<button type="submit" class="btn btn-primary">Guardar Cambios</button>

		</div>
	</div>
</form>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery/jquery-3.2.1.slim.min.js"></script>
	<script src="js/jquery/popper.min.js"></script>
	<script src="js/jquery/bootstrap.min.js"></script>
</body>
>>>>>>> 99a7109918dd1a614754e38e9c7debe83d794976
</html>