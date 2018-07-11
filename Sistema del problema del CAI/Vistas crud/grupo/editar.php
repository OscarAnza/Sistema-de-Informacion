<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "conexion.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM personas WHERE id = ?;");
$sentencia->execute([$id]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);
if($persona == FALSE){
    echo "No existe ninguna persona con ese id";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Agregar grupo</title>
    </head>

<body>
    <form method="post" action="guardarDatosEditados.php">
                <table width="0%" align="center" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                                <td>
                                        <h1>Edicion</h1>
                                        <<input type="hidden" name="id" value="<?php echo $persona->id; ?>">
                                        <label for=nombre>Ingrese nombre del maestro: </label>
                                        <input class="form-control" type="text" value="<?php echo $persona->nombre; ?>" name="nombre" placeholder="Nombre"><br><br>
                                        <label for=nombre>Ingrese la matricula de los alumnos: </label>
                                        <input class="form-control" type="text" value="<?php echo $persona->matriculas; ?>" name="matriculas" placeholder="Matriculas"><br><br>
                                        <label for=nombre>Ingrese el nivel: </label>
                                        <input class="form-control" type="text" value="<?php echo $persona->nivel; ?>" name="nivel" placeholder="Nivel"><br><br>
                                        <label for=nombre>Ingrese la carrera: </label>
                                        <input class="form-control" type="text" value="<?php echo $persona->carrera; ?>" name="carrera" placeholder="Carrera"><br><br>

                                        <input type="submit" value="Guardar cambios">
                                </td>
                        </tr>
                </table>
        </form>
    </body>
</html>