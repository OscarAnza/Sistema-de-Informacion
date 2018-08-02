<?php
if(!isset($_POST["Matricula"]) || !isset($_POST["horaEntrada"]) || !isset($_POST["horaSalida"]) || !isset($_POST["fecha"])) exit();

include_once "conexion.php";

$matricula = $_POST['Matricula'];
$entrada = $_POST['horaEntrada'];
$salida = $_POST['horaSalida'];
$fecha = $_POST['fecha'];

$sentencia = $base_de_datos->prepare("UPDATE alumnos SET UltimoIngresoFecha = ?, UltimoIngresoEntrada = ?, UltimoIngresoSalida = ? WHERE Matricula = ?;");
$resultado = $sentencia->execute([$fecha, $entrada, $salida, $matricula]);

if($resultado == TRUE) echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/alumnos/correcto.html'</script>"; 
else echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/alumnos/incorrecto.html'</script>";
?>