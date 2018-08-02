<?php
#Salir si alguno de los datos no ésta presenta
if(!isset($_POST["Matricula"]) || !isset($_POST["Nombre"]) || !isset($_POST["Carrera"]) || !isset($_POST["Nivel"])) exit();
include_once "conexion.php";

$matricula = $_POST['Matricula'];
$nombre = $_POST['Nombre'];
$carrera = $_POST['Carrera'];
$nivel = $_POST['Nivel'];

$sentencia = $base_de_datos->prepare("UPDATE alumnos SET Nombre = ?, Carrera = ?, Nivel = ? WHERE Matricula = ?;");
$resultado = $sentencia->execute([$nombre, $carrera, $nivel, $matricula]);
if($resultado == TRUE) echo "Cambios guardados";
else echo "Algo salio mal. Por favor verifica que la tabla exista, asi como el ID del usuario";
?>