<?php

namespace AurimasVilys\CarDealership\Strategy;

class CarFuelingStrategy implements PreShipmentStrategyInterface
{
    public function execute(): void {
        echo "Fueling car with gasoline." . PHP_EOL;
    }
}
