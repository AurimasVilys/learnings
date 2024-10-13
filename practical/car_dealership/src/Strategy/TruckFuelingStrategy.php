<?php

namespace AurimasVilys\CarDealership\Strategy;

class TruckFuelingStrategy implements PreShipmentStrategyInterface
{
    public function execute(): void {
        echo "Fueling truck with gasoline." . PHP_EOL;
    }
}
