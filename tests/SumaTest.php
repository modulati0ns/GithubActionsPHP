<?php

use PHPUnit\Framework\TestCase;
use src\Suma;

class SumaTest extends TestCase
{
    // Este es un comentario de prueba
    public function testSuma()
    {
        $suma = new Suma(1, 2);
        $this->assertEquals(3, $suma->sumar(1, 2));
<<<<<<< Updated upstream
=======

        // Test que falla
        // $this->assertFalse(4, $suma->sumar(1, 2));
>>>>>>> Stashed changes
    }
}
