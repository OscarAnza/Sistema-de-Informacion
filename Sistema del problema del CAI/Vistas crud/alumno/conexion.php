<?php 
	$contra = "";
	$user = "root";
	$nombre_bd = "cai";
	try {
		$base_de_datos = new PDO('mysql:host=localhost;dbname='.$nombre_bd, $user, $contra);
	} catch (Exception $e) {
		echo "Error";
	}
 ?>
 <!-- no se modifican-->