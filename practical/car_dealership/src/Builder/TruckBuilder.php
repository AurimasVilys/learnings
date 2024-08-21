<?php

use AurimasVilys\CarDealership\Models\Vehicle;
use AurimasVilys\CarDealership\Models\Truck;

class TruckBuilder implements VehicleBuilderInterface
{
    public function build(): Vehicle
    {
        $fuel = TerminalService::promptAndListen('fuel type');
        $color = TerminalService::promptAndListen('color');
        $transmission = TerminalService::promptAndListen('transmission');
        $extras = TerminalService::promptAndListen('extras');
        $truckType = TerminalService::promptAndListen('truck type');

        return new Truck($fuel, $color, $transmission, $truckType, explode(',', $extras));
    }
}
