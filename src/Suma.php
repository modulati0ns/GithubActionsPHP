<?php

namespace src;

class Suma
{
    private $num1;
    private $num2;

    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function sumar($num1, $num2)
    {
        return $num1 + $num2;
    }

    // getters
    public function getNum1()
    {
        return $this->num1;
    }

    public function getNum2()
    {
        return $this->num2;
    }

    // setters
    public function setNum1($num1)
    {
        $this->num1 = $num1;
    }

    public function setNum2($num2)
    {
        $this->num2 = $num2;
    }
}
