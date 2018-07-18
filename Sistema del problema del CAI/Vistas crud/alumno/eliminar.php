<?php
if(!isset($_GET["Matricula"])) exit();
$id = $_GET["Matricula"];
include_once "conexion.php";
$sentencia = $base_de_datos->prepare("DELETE FROM alumnos WHERE id = ?");
$resultado = $sentencia->execute([$id]);
if($resultado == TRUE) echo "Eliminado correctamente";
else echo "Algo salio mal";
?>
<!-- no se modifican-->