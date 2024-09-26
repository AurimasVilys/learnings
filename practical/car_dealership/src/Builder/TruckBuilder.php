<?php

namespace AurimasVilys\CarDealership\Builder;

use AurimasVilys\CarDealership\Models\Vehicle;
use AurimasVilys\CarDealership\Models\Truck;
use AurimasVilys\CarDealership\Service\TerminalService;

class TruckBuilder extends CarBuilder
{
    public function build(): Vehicle
    {
        $this->vehicle = new Truck();

        $this->setFuelType();
        $this->setColor();
        $this->setTransmission();
        $this->setExtras();
        $this->setTruckType();

        return $this->vehicle;
    }

    private function setTruckType(): void
    {
        $size = TerminalService::getInstance()->promptAndListen('Insert truck type');
        $this->vehicle->setTruckType($size);
    }
}
