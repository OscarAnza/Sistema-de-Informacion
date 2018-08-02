<?php

include_once "conexion.php";

$usuario = $_POST['user'];
$pass = $_POST['password'];

if(empty($usuario) || empty($pass)){
    echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com'</script>";
exit();
}

$sentencia = $base_de_datos->prepare("SELECT * FROM usuarios WHERE Usuario = ?;");
$sentencia->execute([$usuario]);
$result = $sentencia->fetch(PDO::FETCH_OBJ);

if($result->Contraseña == $pass){
    $_SESSION['Usuario'] = $usuario;
    echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com/paginaPrincipal.php'</script>";
}
else{
    echo "<script language='javascript'>window.location='https://sistemas-de-informacion.000webhostapp.com'</script>";
    exit();
}


?>