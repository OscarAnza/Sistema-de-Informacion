<?php
#Salir si alguno de los datos no ésta presenta
if(!isset($_POST["Nombre"]) || !isset($_POST["Turno"])) exit();
include_once "conexion.php";

$id = $_POST['idMaestro'];
$nombre = $_POST['Nombre'];
$turno = $_POST['Turno'];

$sentencia = $base_de_datos->prepare("UPDATE maestros SET Nombre = ?, Turno = ? WHERE idMaestro = ?;");
$resultado = $sentencia->execute([$nombre, $turno, $id]);
if($resultado == TRUE) echo "Cambios guardados";
else echo "Algo salio mal. Por favor verifica que la tabla exista, asi como el ID del usuario";
?>