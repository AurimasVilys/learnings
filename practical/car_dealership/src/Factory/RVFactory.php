<?php

namespace AurimasVilys\CarDealership\Factory;

use AurimasVilys\CarDealership\Models\RV;
use AurimasVilys\CarDealership\Models\VehicleInterface;

class RVFactory implements VehicleFactoryInterface
{
    public function create(): VehicleInterface
    {
        $rv = new RV('fuelType', 'color', 'transmission', [], 'size');

        return $rv;
    }
}
