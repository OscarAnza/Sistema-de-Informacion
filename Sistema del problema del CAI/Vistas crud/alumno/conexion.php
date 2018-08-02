<<<<<<< HEAD
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
=======
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
>>>>>>> 99a7109918dd1a614754e38e9c7debe83d794976
 <!-- no se modifican-->