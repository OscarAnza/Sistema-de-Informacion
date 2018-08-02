<?php
if(!isset($_POST["Nombre"]) || !isset($_POST["id"])) exit();

include_once "conexion.php";

$id = $_POST['id'];
$nombre = $_POST['Nombre'];

$name = "grupo" . $id;

$sentencia = $base_de_datos->prepare("SELECT * FROM alumnos WHERE Nombre = ?");
$sentencia->execute([$nombre]);
$alumno = $sentencia->fetch(PDO::FETCH_OBJ);

$matricula = $alumno->Matricula;

$sentencia = $base_de_datos->prepare("INSERT INTO $name(Matricula, Nombre) VALUES (?, ?);");
$resultado = $sentencia->execute([$matricula, $nombre]);

if($resultado == TRUE) echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/grupos/correcto.html'</script>";
else echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/grupos/incorrecto.html'</script>";

?>