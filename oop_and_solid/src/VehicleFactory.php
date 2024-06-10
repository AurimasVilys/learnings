<?php

namespace AurimasVilys\OopAndSolid;

class VehicleFactory
{
    public static function createVehicle(int $type): ?Vehicle
    {
        return match ($type) {
            Car::TYPE_NUM => Car::create(),
            ElectricCar::TYPE_NUM => ElectricCar::create(),
            Truck::TYPE_NUM => Truck::create(),
            default => null,
        };
    }
}
