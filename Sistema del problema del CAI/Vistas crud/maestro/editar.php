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
        <title>Agregar maestro</title>
    </head>

<body>
    <form method="post" action="guardarDatosEditados.php">
                <table width="0%" align="center" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                                <td>
                                        <h1>Edicion</h1>
                                        <<input type="hidden" name="id" value="<?php echo $persona->id; ?>">
                                        <label for=nombre>Ingrese su nombre: </label>
                                        <input class="form-control" type="text" value="<?php echo $persona->nombre; ?>" name="nombre" placeholder="Nombre"><br><br>
                                        <label for=nombre>Ingrese Turno: </label>
                                        <input class="form-control" type="text" value="<?php echo $persona->turno; ?>" name="turno" placeholder="Turno"><br><br>
                                        <label for=nombre>Ingrese Grupo </label>
                                        <input class="form-control" type="text" value="<?php echo $persona->grupo; ?>" name="grupo" placeholder="Grupo"><br><br>

                                        <input type="submit" value="Guardar cambios">
                                </td>
                        </tr>
                </table>
        </form>
    </body>
</html>