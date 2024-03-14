<?php
namespace Enc ;
class Matiere {
    private string $codeMatiere;
    private string $libelleMatiere;

    /**
     * @param string $codeMatiere
     * @param string $libelleMatiere
     */
    public function __construct(string $codeMatiere, string $libelleMatiere)
    {
        $this->codeMatiere = $codeMatiere;
        $this->libelleMatiere = $libelleMatiere;
    }

    public function getCodeMatiere(): string
    {
        return $this->codeMatiere;
    }

    public function getLibelleMatiere(): string
    {
        return $this->libelleMatiere;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Code matière : " . $this->codeMatiere . " Libellé matière : " . $this->libelleMatiere;
    }


}