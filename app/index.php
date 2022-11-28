<?php

use src\Suma;

require('../vendor/autoload.php');

// Instanciamos la clase Suma
$suma = new Suma(1, 2);

echo($suma->sumar(1, 2));
