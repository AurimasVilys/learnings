<?php

namespace AurimasVilys\CarDealership\Strategy;

class CarWashingStrategy implements PreShipmentStrategyInterface
{
    public function execute(): void {
        echo "Washing a car." . PHP_EOL;
    }
}
