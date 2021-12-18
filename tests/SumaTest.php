<?php

use PHPUnit\Framework\TestCase;

include('src/Suma.php');

class SumaTest extends TestCase
{
    public function testSuma()
    {
        $suma = new Suma(1, 2);
        $this->assertEquals(3, $suma->sumar(1, 2));
    }
}
