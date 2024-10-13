<?php

namespace AurimasVilys\CarDealership\Strategy;

class TruckChargingStrategy implements PreShipmentStrategyInterface
{
    public function execute(): void {
        echo "Charging truck." . PHP_EOL;
    }
}
