<<<<<<< HEAD
<?php
#Salir si alguno de los datos no ésta presenta
if(!isset($_POST["Matricula"]) || !isset($_POST["Nombre"]) || !isset($_POST["Carrera"]) || !isset($_POST["Nivel"])) exit();
#Si todo va bien, se ejecuta esta parte del codigo...
include_once "conexion.php";

$matricula = $_POST['Matricula'];
$nombre = $_POST['Nombre'];
$carrera = $_POST['Carrera'];
$nivel = $_POST['Nivel'];

$sentencia = $base_de_datos->prepare("INSERT INTO alumnos(Matricula, Nombre, Carrera, Nivel) VALUES (?, ?, ?, ?);");
$resultado = $sentencia->execute([$matricula, $nombre, $carrera, $nivel]);
#execute regresa un valor booleano. True en caso de que todo vaya bien, falso si algo va mal
#Con esto podemos evaluar
if($resultado == TRUE) echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/alumnos/correcto.html'</script>"; 
else echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/Sistema del problema del CAI/Vistas crud/alumnos/incorrecto.html'</script>";
=======
<?php
#Salir si alguno de los datos no ésta presenta
if(!isset($_POST["Matricula"]) || !isset($_POST["Nombre"]) || !isset($_POST["Carrera"]) || !isset($_POST["Nivel"])) exit();
#Si todo va bien, se ejecuta esta parte del codigo...
include_once "conexion.php";

$matricula = $_POST['Matricula'];
$nombre = $_POST['Nombre'];
$carrera = $_POST['Carrera'];
$nivel = $_POST['Nivel'];

$sentencia = $base_de_datos->prepare("INSERT INTO alumnos(Matricula, Nombre, Carrera, Nivel) VALUES (?, ?, ?, ?);");
$resultado = $sentencia->execute([$matricula, $nombre, $carrera, $nivel]);
#execute regresa un valor booleano. True en caso de que todo vaya bien, falso si algo va mal
#Con esto podemos evaluar
if($resultado == TRUE) echo "<b>Insertado correctamente</b>";
else echo "Algo salió mal. Por favor verifica que la tabla exista";
?>
>>>>>>> 99a7109918dd1a614754e38e9c7debe83d794976
?>