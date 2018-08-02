<?php
if(!isset($_POST["User"]) || !isset($_POST["Password"])) exit();

include_once "conexion.php";

$user = $_POST['User'];
$password = $_POST['Password'];

$sentencia = $base_de_datos->prepare("INSERT INTO usuarios(Usuario, Contraseña) VALUES (?, ?);");
$resultado = $sentencia->execute([$user, $password]);

if($resultado == TRUE) echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/correcto.html'</script>"; 
else echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/incorrecto.html'</script>";
?>