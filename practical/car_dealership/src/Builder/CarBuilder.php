<?php

use AurimasVilys\CarDealership\Models\Vehicle;
use AurimasVilys\CarDealership\Models\Car;

class CarBuilder implements VehicleBuilderInterface
{
    public function build(): Vehicle
    {
        $fuel = TerminalService::promptAndListen('fuel type');
        $color = TerminalService::promptAndListen('color');
        $transmission = TerminalService::promptAndListen('transmission');
        $extras = TerminalService::promptAndListen('extras');

        return new Car($fuel, $color, $transmission, explode(',', $extras));
    }
}
