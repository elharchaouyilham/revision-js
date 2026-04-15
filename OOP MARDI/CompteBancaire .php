<!-- Créez de A à Z une classe CompteBancaire en appliquant les règles d'encapsulation. Un 
compte a un titulaire, un IBAN et un solde. On peut déposer de l'argent, retirer (si le solde est 
suffisant) et consulter le solde. 
Travail demandé : 
10. Déclarez la classe CompteBancaire avec 3 attributs private : $titulaire, $iban, $solde 
11. Écrivez le constructeur avec les 3 paramètres (solde initial = 0 par défaut si non fourni) 
12. Ajoutez les getters : getTitulaire(), getIban(), getSolde() 
13. Ajoutez la méthode deposer($montant) : valider que $montant > 0, puis ajouter au solde 
14. Ajoutez la méthode retirer($montant) : valider que $montant > 0 ET que le solde est 
suffisant, sinon afficher "Solde insuffisant" 
15. Ajoutez la méthode afficherInfos() qui affiche toutes les infos du compte 
16. Instanciez 2 comptes, effectuez plusieurs dépôts et retraits, vérifiez que les validations 
fonctionnent  -->
<?php
class CompteBancaire {
    private $titulaire;
    private $iban ;
    private $solde ;

   public function __construct($titulaire,$iban,$solde)
    {
     $this->titulaire=$titulaire;
     $this->iban=$iban;
     $this->solde=$solde;  
    }
    public function getTitulaire(){
     return   $this->titulaire;
    }
     public function getIban(){
       return  $this->iban;
    }
    
     public function getSold(){
       return $this->solde;
    }
    public function deboser($montant){
        if($montant>0){
            $this->solde+=$montant;
        }
    }
    public function retirer($montant){
        if($montant>0 && $this->solde>$montant){
            echo "votre sold suffisant";
        }else{
             echo "votre sold est insuffisant";
        }
    }
    public function affichicherinfos(){
        
    }
}
// 13. Ajoutez la méthode deposer($montant) : valider que $montant > 0, puis ajouter au solde 
// 14. Ajoutez la méthode retirer($montant) : valider que $montant > 0 ET que le solde est 
// suffisant, sinon afficher "Solde insuffisant" 
// 15. Ajoutez la méthode afficherInfos() qui affiche toutes les infos du compte 
// 16. Instanciez 2 comptes, effectuez plusieurs dépôts et retraits, vérifiez que les validations 
// fonctionnent  -->