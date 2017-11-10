<?php
	ini_set('display_errors','1');
	require_once("src/Kilo.php");

	$c = new Kilo();
	echo $c;

	$prix = $c->calcul_Prix();	
	echo "<br>Le prix est de ".$prix;
	echo "<br>Le nombre de produit créés est de :".Produit::$compteur;

?>