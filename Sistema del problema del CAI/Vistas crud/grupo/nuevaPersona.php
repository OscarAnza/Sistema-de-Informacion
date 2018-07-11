<?php
#Salir si alguno de los datos no ésta presenta
if(!isset($_POST["nombre"]) || !isset($_POST["apellidos"]) || !isset($_POST["sexo"]) || !isset($_POST["direccion"]) || !isset($_POST["matricula"]) || !isset($_POST["ocupacion"]) || !isset($_POST["edad"]) || !isset($_POST["telefono"])) exit();
#Si todo va bien, se ejecuta esta parte del codigo...
include_once "conexion.php";
$nombre = $_POST['nombre'];
$matriculas = $_POST['matriculas'];
$nivel = $_POST['nivel'];
$carrera = $_POST['carrera'];
$sentencia = $base_de_datos->prepare("INSERT INTO personas(nombre, matriculas, nivel, carrera) VALUES (?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $matriculas, $nivel, $carrera]);
#execute regresa un valor booleano. True en caso de que todo vaya bien, falso si algo va mal
#Con esto podemos evaluar
if($resultado == TRUE) echo "<b>Insertado correctamente</b>";
else echo "Algo salió mal. Por favor verifica que la tabla exista";
?>