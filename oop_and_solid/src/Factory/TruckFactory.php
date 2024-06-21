<?php

namespace AurimasVilys\OopAndSolid\Factory;

use AurimasVilys\OopAndSolid\Model\Truck;
use AurimasVilys\OopAndSolid\Model\Vehicle;

class TruckFactory implements VehicleFactoryInterface
{
    public function create(int $type): ?Vehicle
    {
        echo "You chose Truck\n";
        echo "Model:\n";
        $model = rtrim(fgets(STDIN));

        echo "Engine:\n";
        $engine = rtrim(fgets(STDIN));

        echo "Transmission:\n";
        $transmission = rtrim(fgets(STDIN));

        echo "Fuel type:\n";
        $fuelType = rtrim(fgets(STDIN));

        echo "Truck bed volume:\n";
        $truckBedVolume = (int)rtrim(fgets(STDIN));

        $truck = new Truck();
        $truck->setModel($model);
        $truck->setEngine($engine);
        $truck->setTransmission($transmission);
        $truck->setFuelType($fuelType);
        $truck->setTruckBedVolume($truckBedVolume);

        return $truck;
    }
}
