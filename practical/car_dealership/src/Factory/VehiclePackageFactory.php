<?php

namespace AurimasVilys\CarDealership\Factory;

use AurimasVilys\CarDealership\Models\Car;
use AurimasVilys\CarDealership\Models\Vehicle;

class VehiclePackageFactory
{
    public static function createPackage(Vehicle $sourceVehicle): array
    {
        $car = new Car();
        $car->setFuelType($sourceVehicle->getFuelType());
        $car->setTransmission($sourceVehicle->getTransmission());
        $car->setColor($sourceVehicle->getColor());
        $car->setExtras($sourceVehicle->getExtras());

        return [$sourceVehicle, $car];
    }
}
