<?php

namespace AurimasVilys\CarDealership\Strategy;

class TruckWashingStrategy implements PreShipmentStrategyInterface
{
    public function execute(): void {
        echo "Washing a truck." . PHP_EOL;
    }
}
