<?php

namespace AurimasVilys\OopAndSolid;

class VehicleFactory
{
    public static $vehicles = [
        Car::TYPE_NUM => Car::PRINT_NAME,
        ElectricCar::TYPE_NUM => ElectricCar::PRINT_NAME,
        Truck::TYPE_NUM => Truck::PRINT_NAME,
    ];

    public function createVehicle(int $type): ?Vehicle
    {
        return match ($type) {
            Car::TYPE_NUM => Car::create(),
            ElectricCar::TYPE_NUM => ElectricCar::create(),
            Truck::TYPE_NUM => Truck::create(),
            default => null,
        };
    }
}
