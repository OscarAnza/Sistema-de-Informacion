<?php 
	$contra = "12345";
	$user = "id6463998_root";
	$nombre_bd = "id6463998_cai";
	try {
		$base_de_datos = new PDO('mysql:host=localhost;dbname='.$nombre_bd, $user, $contra);
	} catch (Exception $e) {
		echo "Error";
	}
 ?>
 <!-- no se modifican-->