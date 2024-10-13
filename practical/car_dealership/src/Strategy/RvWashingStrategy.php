<?php

namespace AurimasVilys\CarDealership\Strategy;

class RvWashingStrategy implements PreShipmentStrategyInterface
{
    public function execute(): void {
        echo "Washing and vacuuming RV." . PHP_EOL;
    }
}
