<?php

namespace AurimasVilys\CarDealership\Handlers;

use AurimasVilys\CarDealership\Models\Order;

abstract class PreShipmentHandler extends OrderHandler
{
    protected const VEHICLE_TYPE_STRATEGIES = [];

    protected function process(Order $order): void
    {
        foreach ($order->getVehicles() as $vehicle) {
            if (!array_key_exists($vehicle::NAME, static::VEHICLE_TYPE_STRATEGIES)) {
                echo sprintf(static::class . ' strategy not found for ' . $vehicle::NAME . PHP_EOL);
                continue;
            }

            $strategyType = static::VEHICLE_TYPE_STRATEGIES[$vehicle::NAME];
            $strategy = new $strategyType();
            $strategy->execute();
        }
    }
}