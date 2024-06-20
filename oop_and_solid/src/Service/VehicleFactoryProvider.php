<?php

namespace AurimasVilys\OopAndSolid\Service;

use AurimasVilys\OopAndSolid\Factory\CarFactory;
use AurimasVilys\OopAndSolid\Factory\ElectricCarFactory;
use AurimasVilys\OopAndSolid\Factory\TruckFactory;
use AurimasVilys\OopAndSolid\Factory\VehicleFactoryInterface;
use AurimasVilys\OopAndSolid\Model\Car;
use AurimasVilys\OopAndSolid\Model\ElectricCar;
use AurimasVilys\OopAndSolid\Model\Truck;

class VehicleFactoryProvider
{
    private static array $factories = [
        Car::TYPE_NUM => CarFactory::class,
        ElectricCar::TYPE_NUM => ElectricCarFactory::class,
        Truck::TYPE_NUM => TruckFactory::class,
    ];

    public static function getFactory(int $type): ?VehicleFactoryInterface
    {
        if (!array_key_exists($type, self::$factories)) {
            throw new \LogicException('Invalid factory type provided');
        }

        $factoryClass = self::$factories[$type];

        return new $factoryClass();
    }
}
