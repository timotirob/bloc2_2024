<?php
namespace Enc ;
require "..\\vendor\\autoload.php" ;

$eleve = LectureNotes::lireFichier('../fichiers/Robert.csv');
if ($eleve)
{
    echo $eleve->travaille() . "\n";
    foreach ($eleve->lesNotes() as $note) {
        echo $note . "\n";
    }
}

