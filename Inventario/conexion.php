<?php 
	$contra = "";
	$user = "root";
	$nombre_bd = "inventario";

	try {
		$base_de_datos = new PDO('mysql:host=localhost;dbname='.$nombre_bd, $user, $contra);
	} catch (Exception $e) {
		echo "Error";
	}
 ?>