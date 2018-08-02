<<<<<<< HEAD
<?php
#Salir si alguno de los datos no ésta presenta
if(!isset($_POST["Nombre"]) || !isset($_POST["Turno"])) exit();
include_once "conexion.php";

$id = $_POST['idMaestro'];
$nombre = $_POST['Nombre'];
$turno = $_POST['Turno'];

$sentencia = $base_de_datos->prepare("UPDATE maestros SET Nombre = ?, Turno = ? WHERE idMaestro = ?;");
$resultado = $sentencia->execute([$nombre, $turno, $id]);
if($resultado == TRUE) echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/maestros/correcto.html'</script>"; 
else echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/maestros/incorrecto.html'</script>";
=======
<?php
#Salir si alguno de los datos no ésta presenta
if(!isset($_POST["Nombre"]) || !isset($_POST["Turno"])) exit();
include_once "conexion.php";

$id = $_POST['idMaestro'];
$nombre = $_POST['Nombre'];
$turno = $_POST['Turno'];

$sentencia = $base_de_datos->prepare("UPDATE maestros SET Nombre = ?, Turno = ? WHERE idMaestro = ?;");
$resultado = $sentencia->execute([$nombre, $turno, $id]);
if($resultado == TRUE) echo "Cambios guardados";
else echo "Algo salio mal. Por favor verifica que la tabla exista, asi como el ID del usuario";
>>>>>>> 99a7109918dd1a614754e38e9c7debe83d794976
?>