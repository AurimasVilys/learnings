<?php

namespace AurimasVilys\CarDealership\Handlers;

use AurimasVilys\CarDealership\Models\Order;

abstract class OrderHandler
{
    protected ?OrderHandler $nextHandler = null;

    public function setNextHandler(OrderHandler $handler): void
    {
        $this->nextHandler = $handler;
    }

    public function handle(Order $order): void
    {
        $this->process($order);

        if ($this->nextHandler) {
            $this->nextHandler->handle($order);
        }
    }

    abstract protected function process(Order $order): void;
}
