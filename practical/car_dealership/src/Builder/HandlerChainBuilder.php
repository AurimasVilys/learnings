<?php

namespace AurimasVilys\CarDealership\Builder;

use AurimasVilys\CarDealership\Handlers\BaseOrderHandler;
use AurimasVilys\CarDealership\Handlers\ChargingHandler;
use AurimasVilys\CarDealership\Handlers\CustomerTypeHandler;
use AurimasVilys\CarDealership\Handlers\FuelingHandler;
use AurimasVilys\CarDealership\Handlers\VehiclesBuilderHandler;
use AurimasVilys\CarDealership\Handlers\WashingHandler;

class HandlerChainBuilder
{
    public function build(): BaseOrderHandler
    {
        $orderHandler = new BaseOrderHandler();
        $customerTypeHandler = new CustomerTypeHandler();
        $vehiclesBuilderHandler = new VehiclesBuilderHandler();
        $fuelingHandler = new FuelingHandler();
        $chargingHandler = new ChargingHandler();
        $washingHandler = new WashingHandler();

        $chargingHandler->setNextHandler($washingHandler);
        $fuelingHandler->setNextHandler($chargingHandler);
        $vehiclesBuilderHandler->setNextHandler($fuelingHandler);
        $customerTypeHandler->setNextHandler($vehiclesBuilderHandler);
        $orderHandler->setNextHandler($customerTypeHandler);

        return $orderHandler;
    }
}
