<<<<<<< HEAD
x<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "conexion.php";
$sentencia = $base_de_datos->prepare("DELETE FROM grupos WHERE idGrupos = ?");
$resultado = $sentencia->execute([$id]);

$name = "grupo" . $id;

$sentencia = $base_de_datos->prepare("DROP TABLE $name");
$result = $sentencia->execute();

if($resultado == TRUE) echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/grupos/eliminado.html'</script>";
else echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/grupos/incorrecto.html'</script>";
?>
=======
<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "conexion.php";
$sentencia = $base_de_datos->prepare("DELETE FROM grupos WHERE idGrupos = ?");
$resultado = $sentencia->execute([$id]);
if($resultado == TRUE) echo "Eliminado correctamente";
else echo "Algo salio mal";
?>
>>>>>>> 99a7109918dd1a614754e38e9c7debe83d794976
<!-- no se modifican-->