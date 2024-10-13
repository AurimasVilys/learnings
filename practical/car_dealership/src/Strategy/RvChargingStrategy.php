<?php

namespace AurimasVilys\CarDealership\Strategy;

class RvChargingStrategy implements PreShipmentStrategyInterface
{
    public function execute(): void {
        echo "Charging RV." . PHP_EOL;
    }
}
