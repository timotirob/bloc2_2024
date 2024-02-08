<?php
namespace Enc;
class Eleve
{
    private $nom;
    private $prenom;

    public function __construct($parametreNom, $parametrePrenom)
    {
        $this->nom = $parametreNom;
        $this->prenom = $parametrePrenom;
    }

    public function travaille(): string
    {
        return "Je suis l' élève $this->prenom $this->nom et je travaille sérieusement\n";
    }

}

