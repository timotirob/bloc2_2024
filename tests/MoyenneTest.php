<?php
namespace Enc;


use PHPUnit\Framework\TestCase;

class MoyenneTest extends TestCase
{

    public function testCalculMoyenneNaive1SeuleNote()
    {
        $uneNoteMathRobert = array( new Note("Math", 12, 2, "2021-01-01")) ;

        $this->assertEquals(12, Moyenne::calculMoyenneNaive($uneNoteMathRobert),"KO une seule note");

    }

    public function testCalculNaive2Notes()
    {
        $listeNotesMathRobert = array( new Note("Math", 12, 2, "2021-01-01"),
            new Note("Math", 14, 2, "2021-04-01")) ;
        $this->assertEquals(13, Moyenne::calculMoyenneNaive($listeNotesMathRobert),"KO une seule note");

    }
    public function testCalculNaive4Notes()
    {
        $listeNotesMathRobert = array(
            new Note("Math", 12, 2, "2021-01-01"),
            new Note("Math", 14, 2, "2021-04-01"),
            new Note("Math", 16, 2, "2021-04-08"),
            new Note("Math", 18, 2, "2021-04-15"),

        ) ;

        $this->assertEquals(15, Moyenne::calculMoyenneNaive($listeNotesMathRobert),"KO une seule note");

    }

    public function testCalculNaifArrondi()
    {
        $listeNotesMathRobert = array(
            new Note("Math", 15, 2, "2021-01-01"),
            new Note("Math", 15, 2, "2021-04-01"),
            new Note("Math", 10, 2, "2021-04-08")

        ) ;

        $this->assertEqualsWithDelta(13.33, Moyenne::calculMoyenneNaive($listeNotesMathRobert),0.01,"KO une seule note");

    }

    public function testCalculVraieMoyenne1SeuleNote()
    {
        $uneNoteMathRobert = array( new Note("Math", 12, 2, "2021-01-01")) ;

        $this->assertEquals(12, Moyenne::calculVraieMoyenne($uneNoteMathRobert),"KO une seule note");

    }

    public function testCalculVraie2NotesmemeCoeff()
    {
        $listeNotesMathRobert = array( new Note("Math", 12, 2, "2021-01-01"),
            new Note("Math", 14, 2, "2021-04-01")) ;
        $this->assertEquals(13, Moyenne::calculVraieMoyenne($listeNotesMathRobert),"KO une seule note");

    }

    public function testCalculVraie2NotesCoeffDiffer()
    {
        $listeNotesMathRobert = array( new Note("Math", 12, 2, "2021-01-01"),
            new Note("Math", 14, 1, "2021-04-01")) ;
        $this->assertEqualsWithDelta(12.66, Moyenne::calculVraieMoyenne($listeNotesMathRobert),0.01,"KO une seule note");

    }

    public function testCalculVraie4NotesCoeffDiffer()
    {
        $listeNotesMathRobert = array(
            new Note("Math", 12, 2, "2021-01-01"),
            new Note("Math", 14, 1, "2021-04-01"),
            new Note("Math", 15, 3, "2021-04-01"),
            new Note("Math", 10, 1, "2021-04-01"),


        ) ;
        $this->assertEqualsWithDelta(13.28, Moyenne::calculVraieMoyenne($listeNotesMathRobert),0.01,"KO une seule note");

    }

}
