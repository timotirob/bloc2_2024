<?php
namespace Enc ;

require '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class NoteTest extends TestCase
{

    public function test__toString()
    {
        $note = new Note("Maths", 15, 2, "2024-02-28");
        $this->assertEquals("Matière : Maths Note : 15 Coefficient : 2 Date : 2024-02-28", $note->__toString());

        $note = new Note("Maths", 15, 2, "2024-02-29");
        $this->assertEquals("Matière : Maths Note : 15 Coefficient : 2 Date : 2024-02-29", $note->__toString());


        $note = new Note("Maths", 15, 2, "2024-03-01");
        $this->assertEquals("Matière : Maths Note : 15 Coefficient : 2 Date : 2024-03-01", $note->__toString());

        $note = new Note("Maths", 15, 2);
        $junk = new \DateTime() ;
        $this->assertEquals("Matière : Maths Note : 15 Coefficient : 2 Date : ".$junk->format('Y-m-d'), $note->__toString());

    }
}
