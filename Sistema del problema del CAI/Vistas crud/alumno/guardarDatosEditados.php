<?php
#Salir si alguno de los datos no ésta presenta
if(!isset($_POST["Matricula"]) || !isset($_POST["Nombre"]) || !isset($_POST["Carrera"]) || !isset($_POST["Nivel"])) exit();
include_once "conexion.php";

$nombre = $_POST['Nombre'];
$matricula = $_POST['Matricula'];
$nivel = $_POST['Nivel'];
$carrera = $_POST['Carrera'];

$sentencia = $base_de_datos->prepare("UPDATE alumnos SET Matricula = ?, Nombre = ?, Carrera = ?, Nivel = ? WHERE Matricula = ?;");
$resultado = $sentencia->execute([$matricula, $nombre, $carrera, $nivel, $matricula]);
if($resultado == TRUE) echo "Cambios guardados";
else echo "Algo salio mal. Por favor verifica que la tabla exista, asi como el ID del usuario";
?>