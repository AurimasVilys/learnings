<?php

use AurimasVilys\CarDealership\Models\RV;
use AurimasVilys\CarDealership\Models\Car;

interface VehicleFactoryInterface
{
    public function createCar(string $fuel, string $color, string $transmission, array $extras): Car;
}