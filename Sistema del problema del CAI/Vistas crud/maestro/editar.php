<?php
if(!isset($_GET["idMaestro"])) exit();
$id = $_GET["idMaestro"];
include_once "conexion.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM maestros WHERE id = ?;");
$sentencia->execute([$id]);
$maestros = $sentencia->fetch(PDO::FETCH_OBJ);
if($maestros == FALSE){
    echo "No existe ninguna persona con ese id";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Editar maestro</title>
    </head>

<body>
    <form method="post" action="guardarDatosEditados.php">
                <table width="0%" align="center" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                                <td>
                                        <h1>Edicion</h1>
                                        <<input type="hidden" name="id" value="<?php echo $maestros->idMaestro; ?>">
                                        <label for=nombre>Ingrese su nombre: </label>
                                        <input class="form-control" type="text" value="<?php echo $maestros->Nombre; ?>" name="nombre" placeholder="Nombre"><br><br>
                                        <label for=nombre>Ingrese Turno: </label>
                                        <input class="form-control" type="text" value="<?php echo $maestros->Turno; ?>" name="turno" placeholder="Turno"><br><br>

                                        <input type="submit" value="Guardar cambios">
                                </td>
                        </tr>
                </table>
        </form>
    </body>
</html>