<?php

namespace AurimasVilys\OopAndSolid\Factory;

use AurimasVilys\OopAndSolid\Model\Car;
use AurimasVilys\OopAndSolid\Model\ElectricCar;
use AurimasVilys\OopAndSolid\Model\Truck;
use AurimasVilys\OopAndSolid\Model\Vehicle;

class CarFactory implements VehicleFactoryInterface
{
    public static array $vehicles = [
        Car::TYPE_NUM => Car::PRINT_NAME,
        ElectricCar::TYPE_NUM => ElectricCar::PRINT_NAME,
        Truck::TYPE_NUM => Truck::PRINT_NAME,
    ];

    public function create(int $type): ?Vehicle
    {
        echo "You chose Car\n";
        echo "Model:\n";
        $model = rtrim(fgets(STDIN));

        echo "Engine:\n";
        $engine = rtrim(fgets(STDIN));

        echo "Transmission:\n";
        $transmission = rtrim(fgets(STDIN));

        echo "Fuel type:\n";
        $fuelType = rtrim(fgets(STDIN));

        $car = new Car();
        $car->setModel($model);
        $car->setEngine($engine);
        $car->setTransmission($transmission);
        $car->setFuelType($fuelType);

        return $car;
    }
}