<?php

namespace AurimasVilys\CarDealership\Enum;

use AurimasVilys\CarDealership\Builder\CarBuilder;
use AurimasVilys\CarDealership\Builder\TruckBuilder;
use AurimasVilys\CarDealership\Builder\RVBuilder;
use AurimasVilys\CarDealership\Models\Car;
use AurimasVilys\CarDealership\Models\RV;
use AurimasVilys\CarDealership\Models\Truck;

enum VehicleBuilder: string
{
    case Car = CarBuilder::class;
    case Truck = TruckBuilder::class;
    case RV = RVBuilder::class;

    public static function fromVehicleType(string $vehicleType): ?string
    {
        return match ($vehicleType) {
            Car::NAME => self::Car->value,
            Truck::NAME => self::Truck->value,
            RV::NAME => self::RV->value,
            default => null,
        };
    }
}
