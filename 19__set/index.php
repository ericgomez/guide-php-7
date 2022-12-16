<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

class Coche {
    protected array $piezas = [];

    public function __set(string $name, string $value)
    {
       $this->piezas[$name] = $value;
    }
}

$coche = new Coche();
$coche->ruedas = 4;
var_dump($coche);
