<?php
class Eleve {
    private $nom;
    private $prenom;

    public function __construct($unNom, $unPrenom) {
        $this->nom = $unNom;
        $this->prenom = $unPrenom;
    }

    public function travaille():string {
        return "L'élève $this->prenom $this->nom travaille comme il faut \n";
    }


}

$mrRobert = new Eleve("Robert", "Dupont");
echo $mrRobert->travaille();
$mrFlores = new Eleve("Flores", "Peter");
echo $mrFlores->travaille();
$standia = new Eleve("Tandia", "Sekou");
echo $standia->travaille();

