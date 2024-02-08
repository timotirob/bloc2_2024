<?php
namespace Enc;
class Enseignant {
    private $nom;
    private $prenom;
    private $discipline;
    private array $eleves = [];
    public function __construct($parametreNom, $parametrePrenom, $parametreDiscipline)
    {
        $this->nom = $parametreNom;
        $this->prenom = $parametrePrenom;
        $this->discipline = $parametreDiscipline;
        $this->eleves = [];
    }
    public function enseigne()
    {
        echo "Je suis l' enseignant $this->prenom $this->nom et j'enseigne $this->discipline\n";
    }
    public function ajouteUnEleve(Eleve $unEleve)
    {
        $this->eleves[] = $unEleve;
    }


}