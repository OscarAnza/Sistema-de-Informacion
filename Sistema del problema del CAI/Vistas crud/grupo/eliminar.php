<?php
if(!isset($_GET["idGrupos"])) exit();
$id = $_GET["idGrupos"];
include_once "conexion.php";
$sentencia = $base_de_datos->prepare("DELETE FROM grupos WHERE id = ?");
$resultado = $sentencia->execute([$id]);
if($resultado == TRUE) echo "Eliminado correctamente";
else echo "Algo salio mal";
?>
<!-- no se modifican-->