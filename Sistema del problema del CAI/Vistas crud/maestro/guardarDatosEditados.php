<?php
#Salir si alguno de los datos no ésta presenta
if(!isset($_POST["nombre"]) || !isset($_POST["apellidos"]) || !isset($_POST["sexo"]) || !isset($_POST["direccion"]) || !isset($_POST["matricula"]) || !isset($_POST["ocupacion"]) || !isset($_POST["edad"]) || !isset($_POST["telefono"]) || !isset($_POST["id"])) exit();
include_once "conexion.php";
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$turno = $_POST['turno'];
$grupo = $_POST['grupo'];
$sentencia = $base_de_datos->prepare("UPDATE personas SET nombre = ?, turno = ?, grupo = ? WHERE id = ?;");
$resultado = $sentencia->execute([$nombre, $turno, $grupo, $id]);
if($resultado == TRUE) echo "Cambios guardados";
else echo "Algo salio mal. Por favor verifica que la tabla exista, asi como el ID del usuario";
?>