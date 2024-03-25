<?php
namespace Enc;
class Eleve
{
    private $nom;
    private $prenom;
    private array $lesNotes ;

    public function __construct($parametreNom, $parametrePrenom, $paramNotes)
    {
        $this->nom = $parametreNom;
        $this->prenom = $parametrePrenom;
        $this->lesNotes = $paramNotes ;
    }

    public function lesNotes(): array
    {
        return $this->lesNotes;
    }




    public function travaille(): string
    {
        return "Je suis l' élève $this->prenom $this->nom et je travaille sérieusement\n";
    }

}

