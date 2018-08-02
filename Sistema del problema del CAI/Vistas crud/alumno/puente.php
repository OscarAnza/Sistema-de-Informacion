<?php
if(!isset($_POST["nMatricula"])) exit();

include_once "conexion.php";

$matricula = $_POST['nMatricula'];

$sentencia = $base_de_datos->prepare("SELECT * FROM alumnos WHERE Matricula = ?");
$sentencia->execute([$matricula]);


if($sentencia == TRUE) echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/alumnos/registroES.php?id=$matricula' </script>";
else{
    echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/alumnos'</script>";
    echo "Matricula inexistente";
}
?>