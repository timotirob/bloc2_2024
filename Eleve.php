<?php
class Eleve {
    private $nom;
    private $prenom;
    public function travaille():string {
        return "L'élève travaille comme il faut";
    }
}

$mrRobert = new Eleve();
echo $mrRobert->travaille();