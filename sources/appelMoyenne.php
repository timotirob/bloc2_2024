<?php
namespace Enc ;
require "../vendor/autoload.php" ;

$listeNotesMathRobert = array( new Note(new Matiere("MA","Mathématiques"), 12, 2, "2021-01-01"),
    new Note(new Matiere("MA","Mathématiques"), 16, 4, "2021-03-01")) ;

// echo Moyenne::calculMoyenne([10, 12, 14, 16])."\n" ;

$uneMoyenne = new Moyenne($listeNotesMathRobert) ;

echo $uneMoyenne->calculMoyenneNaive()."\n" ;

echo $uneMoyenne->calculVraieMoyenne()."\n" ;