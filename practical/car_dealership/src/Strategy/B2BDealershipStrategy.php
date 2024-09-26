<?php

namespace AurimasVilys\CarDealership\Strategy;

use AurimasVilys\CarDealership\Models\Car;
use AurimasVilys\CarDealership\Models\Truck;
use AurimasVilys\CarDealership\Models\RV;
use AurimasVilys\CarDealership\Service\TerminalService;

class B2BDealershipStrategy extends AbstractDealershipStrategy
{
    protected const AVAILABLE_VEHICLE_TYPES = [
        Car::NAME,
        Truck::NAME,
        RV::NAME
    ];

    public function serve(): array
    {
        $originalVehicles = parent::serve();
        $mainVehicle = $originalVehicles[0];
        $bulkVehicles = [];

        if ($this->isBulk()) {
            $amount = intval(TerminalService::getInstance()->promptAndListen('Type in amount of vehicles you would like to order: '));

            while ($amount > count($bulkVehicles)) {
                $bulkVehicles[] = clone $mainVehicle;
            }
        }

        return array_merge($originalVehicles, $bulkVehicles);
    }

    private function isBulk(): bool
    {
        return TerminalService::getInstance()->promptAndListen('Would you like to order a bundle? (yes/no)') === 'yes';
    }
}