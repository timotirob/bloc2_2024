<?php
namespace Enc ;

require '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class NoteTest extends TestCase
{

    public function test__toString()
    {
        $note = new Note("Maths", 15, 2, "2020-01-01");
        $this->assertEquals("Matière : Maths Note : 15 Coefficient : 2 Date : 2024-02-08", $note->__toString());

    }
}
