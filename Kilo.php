<?php
require_once('Produit.php');
class Kilo extends Produit{

	public function __construct(){
		echo "Création d'un produit ";
		parent::__construct();
	}

 	public function __toString(){
 		$text = "<hr> Kilo ".
 				"<br> poids_Produit :".$this->poids_Produit.
 				"<br> prix_Kilo :".$this->prix_Kilo."<hr>";
 		return $text;
 	}

 	public function calcul_Prix(){
 		return floor($this->prix_Kilo*$this->poids_Produit);
 	}
}



