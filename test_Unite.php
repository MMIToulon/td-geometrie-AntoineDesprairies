<?php
	require_once("src/Unite.php");

	$d = new Unite();
	echo $d;
	
	$prix = $d->calcul_Prix();	
	echo "<br>Le prix est de ".$prix;
	echo "<br> Le nombre de produit créés est de :".Produit::$compteur;

?>