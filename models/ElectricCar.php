<?php

class ElectricCar extends Car
{
    private $batterySize;

    public function getBatterySize()
    {
        return $this->batterySize;
    }

    public function setBatterySize($batterySize)
    {
        if (isNumber($batterySize) && $batterySize > 0) $this->batterySize = $batterySize;
    }
}