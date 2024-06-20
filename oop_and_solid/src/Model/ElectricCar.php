<?php

declare(strict_types=1);

namespace AurimasVilys\OopAndSolid\Model;

class ElectricCar extends Car
{
    public const TYPE_NUM = 2;
    public const PRINT_NAME = 'Electric car';

    public function __construct()
    {
        $this->setFuelType('Electric');
        $this->setEngine('Electric');
        $this->setTransmission('Automatic');
    }
}
