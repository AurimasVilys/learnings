<?php

namespace AurimasVilys\CarDealership\Builder;

use AurimasVilys\CarDealership\Models\Vehicle;
use AurimasVilys\CarDealership\Models\Car;
use AurimasVilys\CarDealership\Service\TerminalService;

class CarBuilder implements VehicleBuilderInterface
{
    protected Vehicle $vehicle;

    public function build(): Vehicle
    {
        $this->vehicle = new Car();

        $this->setFuelType();
        $this->setColor();
        $this->setTransmission();
        $this->setExtras();

        return $this->vehicle;
    }

    protected function setFuelType(): void
    {
        $fuel = TerminalService::getInstance()->promptAndListen('Insert fuel type');
        $this->vehicle->setFuelType($fuel);
    }

    protected function setColor(): void
    {
        $color = TerminalService::getInstance()->promptAndListen('Insert color');
        $this->vehicle->setColor($color);
    }

    protected function setTransmission(): void
    {
        $transmission = TerminalService::getInstance()->promptAndListen('Insert transmission');
        $this->vehicle->setTransmission($transmission);
    }

    protected function setExtras(): void
    {
        $extras = TerminalService::getInstance()->promptAndListen('Insert extras');
        $this->vehicle->setExtras(explode(',', $extras));
    }
}
