<?php

namespace AurimasVilys\CarDealership\Handlers;

use AurimasVilys\CarDealership\Models\Car;
use AurimasVilys\CarDealership\Models\Truck;
use AurimasVilys\CarDealership\Strategy\CarFuelingStrategy;
use AurimasVilys\CarDealership\Strategy\TruckFuelingStrategy;

final class FuelingHandler extends PreShipmentHandler
{
    protected const VEHICLE_TYPE_STRATEGIES = [
        Car::NAME => CarFuelingStrategy::class,
        Truck::NAME => TruckFuelingStrategy::class
    ];
}
