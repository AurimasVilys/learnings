<?php

declare(strict_types=1);

namespace AurimasVilys\OopAndSolid;

class ElectricCar extends Car
{

    public function __construct()
    {
        $this->setFuelType('Electric');
        $this->setEngine('Electric');
        $this->setTransmission('Automatic');
    }

    public static function create(): Car
    {
        echo "Model:\n";
        $model = rtrim(fgets(STDIN));

        $car = new ElectricCar();
        $car->setModel($model);

        return $car;
    }
}
