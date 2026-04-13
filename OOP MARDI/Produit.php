<?php
class Produit{
    private $nom;
    private $prix;
    private $stock;
    public function __construct($nom,$prix,$stock)
    {
     $this->nom=$nom;
     $this->prix=$prix;
     $this->stock=$stock;
    }
     public function getNom(){
      return $this->nom;
     }
     public function getPrix(){
      return $this->prix;
     }
     public function getstock(){
      return $this->stock;
     }
    public function setNom($nom){
     $this->nom=$nom;
     }
    public function setPrix($prix){
        if($prix>0){
       $this->prix=$prix; 
       }else{
        echo "le prix ne doit pas etre negatif";
       } 
    }
    public function setSock($stock){ 
        if($stock>0){
       $this->stock=$stock; 
       }else{
        echo "le stock ne doit pas etre negatif";
       }
    }
    public function afficher(){
        echo $this->nom."".$this->prix."€".$this->stock;
    }


}
$produit1=new Produit("produit1",30,67);
$produit2=new Produit("produit2",23,45);
$produit1->afficher();
$produit2->afficher();

$Produit1->setPrix(-5);
echo "le nom est".$produit1->getNom();
echo "le prix est".$produit2->getPrix();




// créez produit.php et déclarez la classe Produit avec les 3 attributs private : $nom, $prix,
// $stock
// 2. Ajoutez le constructeur __construct($nom, $prix, $stock) qui initialise les 3 attributs
// 3. Ajoutez les getters : getNom(), getPrix(), getStock()
// 4. Ajoutez le setter setPrix($prix) avec validation : refuser les prix négatifs
// 5. Ajoutez le setter setStock($stock) avec validation : refuser un stock < 0
// 6. Ajoutez la méthode afficher() qui affiche : "[nom] — [prix]€ (stock : [stock])"
// 7. Instanciez 2 produits différents et appelez afficher() sur chacun
// 8. Testez setPrix(-5) — vérifiez que le message d'erreur s'affiche
// 9. Testez getPrix() et getNom() — vérifiez que les valeurs correctes sont retournées