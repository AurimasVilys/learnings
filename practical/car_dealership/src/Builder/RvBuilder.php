<?php

namespace AurimasVilys\CarDealership\Builder;

use AurimasVilys\CarDealership\Models\Vehicle;
use AurimasVilys\CarDealership\Models\RV;
use AurimasVilys\CarDealership\Service\TerminalService;

class RvBuilder extends CarBuilder
{
    public function build(): Vehicle
    {
        $this->vehicle = new RV();

        $this->setFuelType();
        $this->setColor();
        $this->setTransmission();
        $this->setExtras();
        $this->setSize();

        return $this->vehicle;
    }

    private function setSize(): void
    {
        $size = TerminalService::getInstance()->promptAndListen('Insert size');
        $this->vehicle->setSize($size);
    }
}
