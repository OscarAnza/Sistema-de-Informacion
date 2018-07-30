<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "conexion.php";
$sentencia = $base_de_datos->prepare("DELETE FROM alumnos WHERE Matricula = ?");
$resultado = $sentencia->execute([$id]);
if($resultado == TRUE) echo "Eliminado correctamente";
else echo "Algo salio mal";
?>
<!-- no se modifican-->