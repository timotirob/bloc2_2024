<?php
namespace Enc ;

use PHPUnit\Framework\TestCase;

class LectureNotesTest extends TestCase
{

    public function testLireFichier()
    {
        $monFichier = "../fichiers/Robert.csv" ;

        $this->assertFileExists($monFichier, "Fichier non présent");

    }
}
