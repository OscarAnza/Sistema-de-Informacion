<<<<<<< HEAD
<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "conexion.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM grupos WHERE idGrupos = ?;");
$sentencia->execute([$id]);
$grupos = $sentencia->fetch(PDO::FETCH_OBJ);
if($grupos == FALSE){
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
		<a class="navbar-brand" href="https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/grupos">CAI/Grupos</a>
	</nav>
	<br>
	<div class="card mx-auto" style="max-width:800px;">
		<div class="card-header">
			<h3><b>Editar Grupo</b></h3>
			<!-- h3 para el tmaño de las letras
			 b para negritas
			 br para salto de linea
			 max-width para tamaño maximo a la tarjerta
			 mx-auto para centrar la tarjeta-->
		</div>
		<div class="card-body">
		            <input type="hidden" class="form-control" name="idGrupos" id="inputAddress" value="<?php echo $grupos->idGrupos?>">
		    
					<div class="form-group">
							<label for="inputAddress">Maestro</label>
							<select id="inputState" class="form-control" name="Nombre">
								<option selected>Seleccionar maestro</option>
								<?php foreach($maestro as $maestro){?>   
                                    <option><?php echo $maestro->Nombre ?></option>
                                <?php } ?>
						</select>
						</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Nivel</label>
						<select id="inputState" class="form-control" name="Nivel">
								<option selected><?php echo $grupos->Nivel?></option>
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

				
				<div class="form-group">
						<label for="inputPassword4">Carrera</label>
						<select id="inputState" class="form-control" name="Carrera">
								<option selected><?php echo $grupos->Carrera?></option>
								<option>Ingenieria en Tecnologias de la Información</option>
								<option>Ingenieria en la Mecatronica</option>
								<option>Ingenieria en sistemas Automotrices</option>
								<option>PYMES</option>
								<option>Ingenieria en Manufactura</option>
								
						</select>
				</div>
				<div class="form-row">
			
				</div>
				<div class="form-group">
					<div class="form-check">
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Guardar Cambios</button>
				<a role="button" class="btn btn-success my-2 my-sm-0" href="https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/grupos">Regresar</a>
		</div>
	</div>
</form>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery/jquery-3.2.1.slim.min.js"></script>
	<script src="js/jquery/popper.min.js"></script>
	<script src="js/jquery/bootstrap.min.js"></script>
</body>
</html
=======
<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "conexion.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM grupos WHERE idGrupos = ?;");
$sentencia->execute([$id]);
$grupos = $sentencia->fetch(PDO::FETCH_OBJ);
if($grupos == FALSE){
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
			<h3><b>Editar Grupo</b></h3>
			<!-- h3 para el tmaño de las letras
			 b para negritas
			 br para salto de linea
			 max-width para tamaño maximo a la tarjerta
			 mx-auto para centrar la tarjeta-->
		</div>
		<div class="card-body">
		            <input type="hidden" class="form-control" name="idGrupos" id="inputAddress" value="<?php echo $grupos->idGrupos?>">
		    
					<div class="form-group">
							<label for="inputAddress">Maestro</label>
							<input type="text" class="form-control" name="Nombre" id="inputAddress" value="<?php echo $grupos->Nombre?>">
						</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Matricula de los Alumnos</label>
						<input type="text" class="form-control" name="Matriculas" id="inputEmail4" value="<?php echo $grupos->Matriculas?>">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Nivel</label>
						<select id="inputState" class="form-control" name="Nivel">
								<option selected><?php echo $grupos->Nivel?></option>
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
				
				<div class="form-group">
						<label for="inputPassword4">Carrera</label>
						<select id="inputState" class="form-control" name="Carrera">
								<option selected><?php echo $grupos->Carrera?></option>
								<option>Ingenieria en Tecnologias de la Información</option>
								<option>Ingenieria en la Mecatronica</option>
								<option>Ingenieria en sistemas Automotrices</option>
								<option>PYMES</option>
								<option>Ingenieria en Manufactura</option>
								
						</select>
				</div>
				<div class="form-row">
			
				</div>
				<div class="form-group">
					<div class="form-check">
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
</html>
>>>>>>> 99a7109918dd1a614754e38e9c7debe83d794976
