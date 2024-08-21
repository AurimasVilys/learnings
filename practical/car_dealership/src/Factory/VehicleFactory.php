<?php

use AurimasVilys\CarDealership\Models\RV;
use AurimasVilys\CarDealership\Models\Car;

class VehicleFactory implements VehicleFactoryInterface
{
    public function createCar(string $fuel, string $color, string $transmission, array $extras): Car
    {
        return new Car($fuel, $color, $transmission, $extras);
    }

    private function createPackage(RV $rv): Car
    {
        $fuel = $rv->getFuelType();
        $color = $rv->getColor();
        $transmission = $rv->getTransmission();
        $extras = TerminalService::promptAndListen('extras');

        return $this->createCar($fuel, $color, $transmission, explode(',', $extras));
    }
}
