<?php

namespace AurimasVilys\CarDealership\Handlers;

use AurimasVilys\CarDealership\Models\Car;
use AurimasVilys\CarDealership\Models\RV;
use AurimasVilys\CarDealership\Models\Truck;
use AurimasVilys\CarDealership\Strategy\CarChargingStrategy;
use AurimasVilys\CarDealership\Strategy\RvChargingStrategy;
use AurimasVilys\CarDealership\Strategy\TruckChargingStrategy;

final class ChargingHandler extends PreShipmentHandler
{
    protected const VEHICLE_TYPE_STRATEGIES = [
        Car::NAME => CarChargingStrategy::class,
        Truck::NAME => TruckChargingStrategy::class,
        RV::NAME => RvChargingStrategy::class
    ];
}
