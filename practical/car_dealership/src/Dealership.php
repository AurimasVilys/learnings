<?php

namespace AurimasVilys\CarDealership;

use AurimasVilys\CarDealership\Builder\HandlerChainBuilder;
use AurimasVilys\CarDealership\Models\Order;

class Dealership
{
    private HandlerChainBuilder $handlerChainBuilder;

    public function __construct(HandlerChainBuilder $handlerChainBuilder)
    {
        $this->handlerChainBuilder = $handlerChainBuilder;
    }

    public function serve(): void
    {
        $order = new Order();
        $orderHandler = $this->handlerChainBuilder->build();
        $orderHandler->handle($order);
    }
}