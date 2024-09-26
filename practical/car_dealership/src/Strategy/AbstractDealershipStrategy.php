<?php

namespace AurimasVilys\CarDealership\Strategy;

use AurimasVilys\CarDealership\Enum\VehicleBuilder;
use AurimasVilys\CarDealership\Models\RV;
use AurimasVilys\CarDealership\Models\Vehicle;
use AurimasVilys\CarDealership\Service\TerminalService;
use AurimasVilys\CarDealership\Builder\VehicleBuilderInterface;
use AurimasVilys\CarDealership\Factory\VehiclePackageFactory;

abstract class AbstractDealershipStrategy
{
    protected const AVAILABLE_VEHICLE_TYPES = [];

    protected const PACKAGE_VEHICLE_TYPES = [
        RV::NAME
    ];

    public function serve(): array
    {
        $builder = $this->resolveBuilder();

        $vehicle = $builder->build();

        if ($this->isPackage($vehicle)) {
            $package = VehiclePackageFactory::createPackage($vehicle);

            return $package;
        }

        return [$vehicle];
    }

    protected function resolveBuilder(): VehicleBuilderInterface
    {
        $vehicleType = TerminalService::getInstance()
            ->promptAndListen('Which vehicle type would you like to order? ' . implode(', ', static::AVAILABLE_VEHICLE_TYPES));



        $vehicleBuilderClass = VehicleBuilder::fromVehicleType($vehicleType);

        return new $vehicleBuilderClass();
    }

    private function isPackage(Vehicle $vehicle): bool
    {
        return in_array($vehicle::NAME, self::PACKAGE_VEHICLE_TYPES)
            && TerminalService::getInstance()->promptAndListen('Would you like to order a package? (yes/no)') === 'yes';
    }
}
