<?php
namespace Enc ;
class Note {
    private string $matiere ;
    private float $valeurNote ;
    private int $coefficient ;
    private \DateTime   $dateNote ;

public function __construct($matiere, $valeurNote, $coefficient, $dateNote=NULL){
        $this->matiere = $matiere;
        $this->valeurNote = $valeurNote;
        $this->coefficient = $coefficient;
        //$this->dateNote = new \DateTime();
       /* if ($dateNote == NULL) {
            $this->dateNote = new \DateTime();
        } else {
            $this->dateNote = new \DateTime($dateNote);
        }*/
    $this->dateNote = (is_null($dateNote)) ? new \DateTime() : new \DateTime($dateNote);
    }

    public function getMatiere(): string
    {
        return $this->matiere;
    }

    public function getValeurNote(): float
    {
        return $this->valeurNote;
    }

    public function getCoefficient(): int
    {
        return $this->coefficient;
    }

    public function getDateNote(): \DateTime
    {
        return $this->dateNote;
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