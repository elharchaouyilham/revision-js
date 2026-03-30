<?php
class Animal{
    public $nom;
    public $race;
    public $couleur;
    public function __construct($nom,$race,$couleur)
    {
        $this->nom=$nom;
        $this->race=$race;
        $this->couleur=$couleur;

    }
    public function getNom($nom){
        return $nom;
    }
    public function getRace($race){
        return $race;
    }
    public function parler(){
        echo $this->nom." dit :grr!";
    }
    public function decrire(){
        echo $this->nom. "et un ".$this->race ."son couleur est".$this->couleur;
    }

}
$animal1=new Animal('rex','chien','white');
$animal2=new Animal('mim','chat','white');
$animal1->parler();
$animal2->parler();
echo $animal1->nom;
?>









