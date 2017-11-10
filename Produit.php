<?php 
abstract class Produit 
{
   protected $nom_Produit = 0;
   protected $poids_Produit = 10;
   protected $prix_Kilo = 10;
   protected $nombre_Produit = 20;
   protected $prix_Unite = 5;

   public static $compteur = 0 ;
	public function __construct() {
      echo "Construction d'un produit";

      self::$compteur++;
	}

   public abstract function calcul_Prix();   
}
?>

