<?php
namespace Enc ;
require "../vendor/autoload.php" ;

$listeNotesMathRobert = array( new Note("Math", 12, 2, "2021-01-01"),
    new Note("Math", 16, 4, "2021-03-01")) ;

// echo Moyenne::calculMoyenne([10, 12, 14, 16])."\n" ;

echo Moyenne::calculMoyenneNaive($listeNotesMathRobert)."\n" ;

echo Moyenne::calculVraieMoyenne($listeNotesMathRobert)."\n" ;