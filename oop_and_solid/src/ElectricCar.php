<?php

declare(strict_types=1);

namespace AurimasVilys\OopAndSolid;

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

    public static function create(): Car
    {
        echo "You chose Electric car\n";
        echo "Model:\n";
        $model = rtrim(fgets(STDIN));

        $car = new ElectricCar();
        $car->setModel($model);

        return $car;
    }

    public function getBodyAssembleDetails(): string
    {
        return "Body is assembled successfully for model " . $this->getModel() . "\n";
    }

    public function getFuelFillingDetails(): string
    {
        return "Oh no! Electric vehicle shouldn't be fueled with gas!\n";
    }
}
