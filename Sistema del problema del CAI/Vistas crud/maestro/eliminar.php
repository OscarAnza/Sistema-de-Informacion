<?php
if(!isset($_GET["idMaestro"])) exit();
$id = $_GET["idMaestro"];
include_once "conexion.php";
$sentencia = $base_de_datos->prepare("DELETE FROM maestros WHERE id = ?");
$resultado = $sentencia->execute([$id]);
if($resultado == TRUE) echo "Eliminado correctamente";
else echo "Algo salio mal";
?>
<!-- no se modifican-->