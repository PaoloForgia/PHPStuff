<?php

class Car
{

    public $marca;
    public $modello;
    private $vin;

    public function __construct($vin, $marca = null, $modello = null)
    {
        $this->vin = $vin;
        $this->marca = $marca;
        $this->modello = $modello;
    }

    public function getVin()
    {
        return $this->vin;
    }

    public function setVin($vin)
    {
        if (length($vin) >= 5) $this->vin = $vin;
    }
}
