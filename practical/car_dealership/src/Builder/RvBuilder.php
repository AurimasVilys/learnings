<?php

use AurimasVilys\CarDealership\Models\Vehicle;
use AurimasVilys\CarDealership\Models\RV;

class RvBuilder implements VehicleBuilderInterface
{
    public function build(): Vehicle
    {
        $fuel = TerminalService::promptAndListen('fuel type');
        $color = TerminalService::promptAndListen('color');
        $transmission = TerminalService::promptAndListen('transmission');
        $extras = TerminalService::promptAndListen('extras');
        $size = TerminalService::promptAndListen('size');

        return new RV($fuel, $color, $transmission, explode(',', $extras), $size);
    }
}
