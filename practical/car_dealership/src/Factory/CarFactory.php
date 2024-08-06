<?php

namespace AurimasVilys\CarDealership\Factory;

use AurimasVilys\CarDealership\Models\Car;
use AurimasVilys\CarDealership\Models\VehicleInterface;

class CarFactory implements VehicleFactoryInterface
{
    public function create(): VehicleInterface
    {
        $car = new Car('fuelType', 'color', 'transmission', []);

        return $car;
    }
}
