<?php

namespace AurimasVilys\OopAndSolid\Factory;

use AurimasVilys\OopAndSolid\Model\ElectricCar;
use AurimasVilys\OopAndSolid\Model\Vehicle;

class ElectricCarFactory implements VehicleFactoryInterface
{
    public function create(int $type): ?Vehicle
    {
        echo "You chose Electric car\n";
        echo "Model:\n";
        $model = rtrim(fgets(STDIN));

        $car = new ElectricCar();
        $car->setModel($model);

        return $car;
    }
}
