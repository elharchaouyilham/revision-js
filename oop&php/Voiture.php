<?php
class Voiture{
    public $marque;
    public $modele;
    public $annee;

public function __construct($marque,$modele,$annee){
$this->marque=$marque;
$this->modele=$modele;
$this->annee=$annee;
}

public function demarer(){
    echo $this->marque.$this->modele ."demarre!";
}


}
$voiture1=new Voiture('marque1','model1',2004);
$voiture2=new Voiture('marque2','model2',2016);
$voiture1->demarer();
$voiture2->demarer();