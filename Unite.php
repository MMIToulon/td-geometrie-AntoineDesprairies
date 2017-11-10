<?php
require_once('Produit.php');
class Unite extends Produit{

	public function __construct(){
		echo "Création d'un produit ";
		parent::__construct();
	}

 	public function __toString(){
 		$text = "<hr> Unite ".
 				"<br> nombre_Produit :".$this->nombre_Produit.
 				"<br> prix_Unite :".$this->prix_Unite."<hr>";
 		return $text;
 	}

 	public function calcul_Prix(){
 		return floor($this->nombre_Produit*$this->prix_Unite);
 	}	
}
?>


