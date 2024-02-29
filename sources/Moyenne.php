<?php
namespace Enc ;

class Moyenne {

    /** On a 2 méthodes statiques car cette classe est utilitaire
    * Elle sert à calculer des moyennes, mais n'a pas de sens d'instancier un objet de cette classe
    * On a donc des méthodes statiques
    * En paramètre on n'a pas une liste d'entiers mais une liste de Note
    * On a donc un tableau de Note et non un tableau d'entiers
     *  Il faut alors accéder à la valeur de la note avec la méthode getValeurNote
    */


    /**
     * la moyenne naive ne tient pas compte des coefficients
     * @param $notes
     * @return float|int
     */
    public static function calculMoyenneNaive($notes) {
        $somme = 0 ;
        foreach ($notes as $note) {
            $somme += $note->getValeurNote() ;
        }
        if (count($notes) == 0) {
            return 0 ;
        }
        return $somme / count($notes) ;
    }

    /**
     *  la vraie moyenne prend en compte les coefficients
     * @param $notes
     * @return float|int
     */
    public static function calculVraieMoyenne($notes) {
        $sommeNote = 0 ;
        $sommeCoeff = 0 ;
        foreach ($notes as $note) {
            $sommeNote += $note->getValeurNote() * $note->getCoefficient() ;
            $sommeCoeff += $note->getCoefficient() ;
        }
        if ($sommeCoeff == 0) {
            return 0 ;
        }
        return $sommeNote / $sommeCoeff ;
    }

}