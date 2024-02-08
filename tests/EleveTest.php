<?php

namespace Enc;

use PHPUnit\Framework\TestCase;

class EleveTest extends TestCase
{

    public function testTravaille()
    {
        $mrRobert = new Eleve("Robert", "Timothée");
        // $this->assertEquals(4,2+2, "2 + 2 ne font pas 4");
        $this->assertEquals("Je suis l' élève Timothée Robert et je travaille sérieusement\n", $mrRobert->travaille(), "Le travail de l'élève n'est pas correctement défini");

    }
}
