<?php

namespace AurimasVilys\CarDealership\Strategy;

class CarChargingStrategy implements PreShipmentStrategyInterface
{
    public function execute(): void {
        echo "Charging car." . PHP_EOL;
    }
}
