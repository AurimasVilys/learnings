<?php

namespace AurimasVilys\CarDealership\Handlers;

use AurimasVilys\CarDealership\Models\Car;
use AurimasVilys\CarDealership\Models\RV;
use AurimasVilys\CarDealership\Models\Truck;
use AurimasVilys\CarDealership\Strategy\CarWashingStrategy;
use AurimasVilys\CarDealership\Strategy\RvWashingStrategy;
use AurimasVilys\CarDealership\Strategy\TruckWashingStrategy;

final class WashingHandler extends PreShipmentHandler
{
    protected const VEHICLE_TYPE_STRATEGIES = [
        Car::NAME => CarWashingStrategy::class,
        Truck::NAME => TruckWashingStrategy::class,
        RV::NAME => RvWashingStrategy::class
    ];
}
