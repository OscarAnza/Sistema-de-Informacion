<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "conexion.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM maestros WHERE idMaestro = ?;");
$sentencia->execute([$id]);
$maestros = $sentencia->fetch(PDO::FETCH_OBJ);
if($maestros == FALSE){
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
			<h3><b>Editar maestro</b></h3>
			<!-- h3 para el tmaño de las letras
			 b para negritas
			 br para salto de linea
			 max-width para tamaño maximo a la tarjerta
			 mx-auto para centrar la tarjeta-->
		</div>
		<div class="card-body">
		            <input type="hidden" class="form-control" name="idMaestro" id="inputAddress" value="<?php echo $maestros->idMaestro?>">
		    
					<div class="form-group">
							<label for="inputAddress">Nombre</label>
							<input type="text" class="form-control" name="Nombre" id="inputAddress" value="<?php echo $maestros->Nombre?>">
						</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputPassword4">Turno</label>
						<select id="inputState" class="form-control" name="Turno">
								<option selected><?php echo $maestros->Turno?></option>
								<option>Matutino</option>
								<option>Vespertino</option>
						</select>
						
					</div>
				</div>
				
		</div>
			<button type="submit" class="btn btn-primary">Guardar Cambios</button>
	</div>
</form>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery/jquery-3.2.1.slim.min.js"></script>
	<script src="js/jquery/popper.min.js"></script>
	<script src="js/jquery/bootstrap.min.js"></script>
</body>
</html>