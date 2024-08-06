<?php

namespace AurimasVilys\CarDealership\Factory;

use AurimasVilys\CarDealership\Models\Truck;
use AurimasVilys\CarDealership\Models\VehicleInterface;

class TruckFactory implements VehicleFactoryInterface
{
    public function create(): VehicleInterface
    {
        $truck = new Truck('fuelType', 'color', 'transmission', 'truckType', []);

        return $truck;
    }
}
