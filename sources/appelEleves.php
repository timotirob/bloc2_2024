<?php
namespace Enc;
require "../vendor/autoload.php";


$mmeMoustaquim = new Eleve("Moustaquim", "Aya") ;
echo $mmeMoustaquim->travaille() ;

$mrRobert = new Enseignant("Robert", "Timothée", "Informatique") ;
$mrRobert->ajouteUnEleve($mmeMoustaquim) ;
echo $mrRobert->enseigne() ;

$mrSTandia = new Eleve("Tandia", "Sekou") ;
echo $mrSTandia->travaille() ;