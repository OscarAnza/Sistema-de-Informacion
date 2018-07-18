<?php
if(!isset($_GET["Matricula"])) exit();
$id = $_GET["Matricula"];
include_once "conexion.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM alumnos WHERE id = ?;");
$sentencia->execute([$id]);
$alumnos = $sentencia->fetch(PDO::FETCH_OBJ);
if($alumnos == FALSE){
    echo "No existe ninguna persona con ese id";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Editar alumno</title>
    </head>

<body>
    <form method="post" action="guardarDatosEditados.php">
                <table width="0%" align="center" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                                <td>
                                        <h1>Edicion</h1>
                                        <label for=matricula>Ingrese la matricula </label>
                                        <input class="form-control" type="text" value="<?php echo $alumnos->Matricula; ?>" name="matricula" placeholder="Matricula"><br><br>
                                        <label for=nombre>Ingrese su nombre: </label>
                                        <input class="form-control" type="text" value="<?php echo $alumnos->Nombre; ?>" name="nombre" placeholder="Nombre"><br><br>
                                        <label for=carrera>Ingrese Carrera: </label>
                                        <input class="form-control" type="text" value="<?php echo $alumnos->Carrera; ?>" name="carrera" placeholder="Carrera"><br><br>
                                        <label for=nivel>Ingrese Nivel: </label>
                                        <input class="form-control" type="text" value="<?php echo $alumnos->Nivel; ?>" name="nivel" placeholder="Nivel"><br><br>

                                        <input type="submit" value="Guardar cambios">
                                </td>
                        </tr>
                </table>
        </form>
    </body>
</html>