<<<<<<< HEAD
<?php
#Salir si alguno de los datos no ésta presenta
if(!isset($_POST["Matricula"]) || !isset($_POST["Nombre"]) || !isset($_POST["Carrera"]) || !isset($_POST["Nivel"])) exit();
include_once "conexion.php";

$matricula = $_POST['Matricula'];
$nombre = $_POST['Nombre'];
$carrera = $_POST['Carrera'];
$nivel = $_POST['Nivel'];

$sentencia = $base_de_datos->prepare("UPDATE alumnos SET Nombre = ?, Carrera = ?, Nivel = ? WHERE Matricula = ?;");
$resultado = $sentencia->execute([$nombre, $carrera, $nivel, $matricula]);
if($resultado == TRUE) echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/alumnos/correcto.html'</script>"; 
else echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/alumnos/incorrecto.html'</script>";
=======
<?php
#Salir si alguno de los datos no ésta presenta
if(!isset($_POST["Matricula"]) || !isset($_POST["Nombre"]) || !isset($_POST["Carrera"]) || !isset($_POST["Nivel"])) exit();
include_once "conexion.php";

$matricula = $_POST['Matricula'];
$nombre = $_POST['Nombre'];
$carrera = $_POST['Carrera'];
$nivel = $_POST['Nivel'];

$sentencia = $base_de_datos->prepare("UPDATE alumnos SET Nombre = ?, Carrera = ?, Nivel = ? WHERE Matricula = ?;");
$resultado = $sentencia->execute([$nombre, $carrera, $nivel, $matricula]);
if($resultado == TRUE) echo "Cambios guardados";
else echo "Algo salio mal. Por favor verifica que la tabla exista, asi como el ID del usuario";
>>>>>>> 99a7109918dd1a614754e38e9c7debe83d794976
?>