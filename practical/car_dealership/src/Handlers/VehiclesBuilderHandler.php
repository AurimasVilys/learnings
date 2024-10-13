<?php

namespace AurimasVilys\CarDealership\Handlers;

use AurimasVilys\CarDealership\Enum\CustomerType;
use AurimasVilys\CarDealership\Models\Order;
use AurimasVilys\CarDealership\Strategy\B2BDealershipStrategy;
use AurimasVilys\CarDealership\Strategy\B2CDealershipStrategy;

final class VehiclesBuilderHandler extends OrderHandler
{
    private const DEALERSHIP_STRATEGIES = [
        CustomerType::B2C->value => B2CDealershipStrategy::class,
        CustomerType::B2B->value => B2BDealershipStrategy::class
    ];

    protected function process(Order $order): void
    {
        $strategyType = self::DEALERSHIP_STRATEGIES[$order->getCustomerType()->value];
        $strategy = new $strategyType();
        $vehicles = $strategy->serve($order);

        foreach ($vehicles as $vehicle) {
            $order->addVehicle($vehicle);
        }

        print_r($order);
    }
}
