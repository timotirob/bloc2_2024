<?php
namespace Enc ;
class Note {
    private string $matiere ;
    private float $valeurNote ;
    private int $coefficient ;
    private \DateTime   $dateNote ;

public function __construct($matiere, $valeurNote, $coefficient) {
        $this->matiere = $matiere;
        $this->valeurNote = $valeurNote;
        $this->coefficient = $coefficient;
        $this->dateNote = new \DateTime();
    }

   public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Matière : " . $this->matiere . " Note : " . $this->valeurNote . " Coefficient : " . $this->coefficient . " Date : " . $this->dateNote->format('Y-m-d');
    }

    /*public function __toString()
        {
            // TODO: Implement __toString() method.
            return " Note confidentielle attendre le bulletin";
        }*/
}