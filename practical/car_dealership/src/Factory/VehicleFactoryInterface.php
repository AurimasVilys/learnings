<?php

namespace AurimasVilys\CarDealership\Factory;

use AurimasVilys\CarDealership\Models\VehicleInterface;

interface VehicleFactoryInterface
{
    public function create(): VehicleInterface;
}
