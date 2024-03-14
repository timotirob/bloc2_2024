<?php
namespace Enc;
use PHPUnit\Framework\TestCase;

class MoyenneTest extends TestCase
{
    public function testCalculMoyenneNaive1SeuleNote()
    {
        $uneNoteMathRobert = array( new Note(new Matiere("MA","Mathématiques"), 12, 2, "2021-01-01")) ;
        $uneMoyenne = new Moyenne($uneNoteMathRobert) ;
        $this->assertEquals(12, $uneMoyenne->calculMoyenneNaive(),"KO une seule note");
    }

    public function testCalculNaive2Notes()
    {
        $listeNotesMathRobert = array( new Note(new Matiere("MA","Mathématiques"), 12, 2, "2021-01-01"),
            new Note(new Matiere("MA","Mathématiques"), 14, 2, "2021-04-01")) ;
        $uneMoyenne = new Moyenne($listeNotesMathRobert) ;
        $this->assertEquals(13, $uneMoyenne->calculMoyenneNaive(),"KO une seule note");

    }
    public function testCalculNaive4Notes()
    {
        $listeNotesMathRobert = array(
            new Note(new Matiere("MA","Mathématiques"), 12, 2, "2021-01-01"),
            new Note(new Matiere("MA","Mathématiques"), 14, 2, "2021-04-01"),
            new Note(new Matiere("MA","Mathématiques"), 16, 2, "2021-04-08"),
            new Note(new Matiere("MA","Mathématiques"), 18, 2, "2021-04-15"),

        ) ;
        $uneMoyenne = new Moyenne($listeNotesMathRobert) ;
        $this->assertEquals(15, $uneMoyenne->calculMoyenneNaive(),"KO une seule note");

    }

    public function testCalculNaifArrondi()
    {
        $listeNotesMathRobert = array(
            new Note(new Matiere("MA","Mathématiques"), 15, 2, "2021-01-01"),
            new Note(new Matiere("MA","Mathématiques"), 15, 2, "2021-04-01"),
            new Note(new Matiere("MA","Mathématiques"), 10, 2, "2021-04-08")

        ) ;
        $uneMoyenne = new Moyenne($listeNotesMathRobert) ;

        $this->assertEqualsWithDelta(13.33, $uneMoyenne->calculMoyenneNaive($listeNotesMathRobert),0.01,"KO une seule note");
    }

    public function testCalculVraieMoyenne1SeuleNote()
    {
        $uneNoteMathRobert = array( new Note(new Matiere("MA","Mathématiques"), 12, 2, "2021-01-01")) ;
        $uneMoyenne = new Moyenne($uneNoteMathRobert) ;
        $this->assertEquals(12, $uneMoyenne->calculVraieMoyenne($uneNoteMathRobert),"KO une seule note");
    }

    public function testCalculVraie2NotesmemeCoeff()
    {
        $listeNotesMathRobert = array( new Note(new Matiere("MA","Mathématiques"), 12, 2, "2021-01-01"),
            new Note(new Matiere("MA","Mathématiques"), 14, 2, "2021-04-01")) ;

        $uneMoyenne = new Moyenne($listeNotesMathRobert) ;
        $this->assertEquals(13, $uneMoyenne->calculVraieMoyenne(),"KO une seule note");
        // $this->assertEquals(13, Moyenne::calculVraieMoyenne($listeNotesMathRobert),"KO une seule note");
    }

    public function testCalculVraie2NotesCoeffDiffer()
    {
        $listeNotesMathRobert = array( new Note(new Matiere("MA","Mathématiques"), 12, 2, "2021-01-01"),
            new Note(new Matiere("MA","Mathématiques"), 14, 1, "2021-04-01")) ;
        $uneMoyenne = new Moyenne($listeNotesMathRobert) ;
        $this->assertEqualsWithDelta(12.66, $uneMoyenne->calculVraieMoyenne(),0.01,"KO une seule note");
    }

    public function testCalculVraie4NotesCoeffDiffer()
    {
        $listeNotesMathRobert = array(
            new Note(new Matiere("MA","Mathématiques"), 12, 2, "2021-01-01"),
            new Note(new Matiere("MA","Mathématiques"), 14, 1, "2021-04-01"),
            new Note(new Matiere("MA","Mathématiques"), 15, 3, "2021-04-01"),
            new Note(new Matiere("MA","Mathématiques"), 10, 1, "2021-04-01"),
        ) ;
        $uneMoyenne = new Moyenne($listeNotesMathRobert) ;
        $this->assertEqualsWithDelta(13.28, $uneMoyenne->calculVraieMoyenne(),0.01,"KO une seule note");
    }

}
