<<<<<<< HEAD
<?php
#Salir si alguno de los datos no ésta presenta
if(!isset($_POST["Nombre"]) || !isset($_POST["Carrera"]) || !isset($_POST["Nivel"]) || !isset($_POST["idGrupos"])) exit();
include_once "conexion.php";

$id = $_POST['idGrupos'];
$nombre = $_POST['Nombre'];
$nivel = $_POST['Nivel'];
$carrera = $_POST['Carrera'];
$sentencia = $base_de_datos->prepare("UPDATE grupos SET Nombre = ?, Nivel = ?, Carrera = ? WHERE idGrupos = ?;");
$resultado = $sentencia->execute([$nombre, $nivel, $carrera, $id]);
if($resultado == TRUE) echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/grupos/correcto.html'</script>"; 
else echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/grupos/incorrecto.html'</script>";
=======
<?php
#Salir si alguno de los datos no ésta presenta
if(!isset($_POST["Nombre"]) || !isset($_POST["Matriculas"]) || !isset($_POST["Carrera"]) || !isset($_POST["Nivel"]) || !isset($_POST["idGrupos"])) exit();
include_once "conexion.php";

$id = $_POST['idGrupos'];
$nombre = $_POST['Nombre'];
$matriculas = $_POST['Matriculas'];
$nivel = $_POST['Nivel'];
$carrera = $_POST['Carrera'];
$sentencia = $base_de_datos->prepare("UPDATE grupos SET Nombre = ?, Matriculas = ?, Nivel = ?, Carrera = ? WHERE idGrupos = ?;");
$resultado = $sentencia->execute([$nombre, $matriculas, $nivel, $carrera, $id]);
if($resultado == TRUE) echo "Cambios guardados";
else echo "Algo salio mal. Por favor verifica que la tabla exista, asi como el ID del usuario";
>>>>>>> 99a7109918dd1a614754e38e9c7debe83d794976
?>